<?php
namespace yii2woop\common\components;

use yii2woop\common\components\providers\VirtualArrayDataProvider;
use yii2woop\generated\enums\OperationDirection;
use yii2woop\generated\enums\OperationType;
use yii2woop\generated\model\ReportResponse_Operation;
use yii2woop\generated\model\reports\Operation;
use yii2woop\generated\request\report\filter\TransferPaymentReportFilter;
use yii2woop\generated\request\report\filter\TransferPaymentReportFilterBranch;
use yii2woop\generated\transport\TpsCommands;
use yii2woop\generated\transport\TpsReports;

class TransfersReport {
	const FILTER_TRANSFERS = "transfers";
	const FILTER_PAYMENTS = "payments";
	const FILTER_TRANSACTIONS_WITH_SCORE = "transactions_with_score";
	
	public static function addFieldsData($data) {
		$operationIds = array_map(function ($oper) {
			return (int) $oper->id;
		}, $data);
		if(!empty($operationIds)) {
			$operationIds = array_values($operationIds);
			foreach($data as &$operation) {
				$operation->fields = '';
			}
		}
		
		return $data;
	}
	
	/**
	 * @param Operation[] $data
	 *
	 * @return Operation[]
	 */
	public static function addBillingInfo($data) {
		$operationIds = array_map(function ($oper) {
			return (int) $oper->id;
		}, $data);
		if(!empty($operationIds)) {
			$operationIds = array_values($operationIds);
			$billing_info = TpsCommands::getOperationsBillInfo($operationIds)->send();
			foreach($data as &$operation) {
				$operation->billingInfo = isset($billing_info[ $operation->id ]) ? $billing_info[ $operation->id ] : null;
			}
		}
		return $data;
	}
	
	
	/**
	 * @param null $filter
	 * @param int  $limit
	 * @param int  $offset
	 *
	 * @return Operation[]
	 */
	public static function getOperationsList($filter = null, $limit = 10, $offset = 0) {
		$report = self::getReportResponse($filter, $limit, $offset);
		return $report->data;
	}
	
	/**
	 * @param null $filter
	 * @param int  $limit
	 * @param int  $offset
	 *
	 * @return VirtualArrayDataProvider
	 */
	public static function getDataProvider($filter = null, $limit = 10, $offset = 0) {
		$report = self::getReportResponse($filter, $limit, $offset);
		return $report->getDataProvider();
	}
	
	
	/**
	 * @param null $filter
	 * @param int  $limit
	 * @param int  $offset
	 *
	 * @return ReportResponse_Operation
	 */
	public static function getReportResponse($filter = null, $limit = 10, $offset = 0) {
		// todo: rewrite
		$report = TpsReports::transferPaymentExtended();
		$report->filter->filter = new TransferPaymentReportFilter();
		$report->filter->children = [];
		$report->filter->filter->viewOwn = empty($filter['viewOwn']) ? false : true;
		if(!empty($filter['login'])) {
			$login_arr = (array) $filter['login'];
			if(!empty($filter['direction'])) {
				if($filter['direction'] == OperationDirection::OUTGOING) {
					$report->filter->filter->subjectFrom = $login_arr;
				} elseif($filter['direction'] == OperationDirection::INCOMING) {
					$report->filter->filter->subjectTo = $login_arr;
				} elseif($filter['direction'] == OperationDirection::EXTERNAL) {
					$report->filter->filter->specialist = $login_arr;
				}
			} else {
				$f = new TransferPaymentReportFilterBranch();
				$f->type = 'or';
				$f->filter = new TransferPaymentReportFilter();
				$f->filter->subjectFrom = $login_arr;
				$f->filter->subjectTo = $login_arr;
				$f->filter->specialist = $login_arr;
				$report->filter->children[] = $f;
			}
		}
		if(!empty($filter['type'])) {
			if($filter['type'] == TransfersReport::FILTER_TRANSFERS) {
				$report->filter->filter->operationTypeId = [
					OperationType::TRANSFER,
					OperationType::TRANSFER_DONATE,
					OperationType::TRANSFER_ADDRESSLESS,
					OperationType::TRANSFER_WSDL,
					OperationType::TRANSFER_DONATE_WSDL,
				];
			} elseif($filter['type'] == TransfersReport::FILTER_PAYMENTS) {
				$report->filter->filter->operationTypeId = [
					OperationType::PAYMENT,
					OperationType::INVOICE,
					OperationType::PAYMENT_WSDL,
					OperationType::INVOICE_WSDL,
				];
			} elseif($filter['type'] == TransfersReport::FILTER_TRANSACTIONS_WITH_SCORE) {
				$report->filter->filter->operationTypeId = [
					OperationType::TRANSFER_AGENT,
					OperationType::TRANSFER_AGENT_WSDL,
					OperationType::TRANSFER_SUBAGENT,
					OperationType::TRANSFER_SALE_WSDL,
				];
			}
		}
		if(!empty($filter['status'])) {
			$st = (array) $filter['status'];
			foreach($st as &$s) {
				$s = (int) $s;
			}
			if($st) {
				$report->filter->filter->operationStatus = $st;
			}
		}
		if(!empty($filter['date_from'])) {
			$date_from = date('Y-m-d', strtotime($filter['date_from']));
			$report->filter->filter->dateFrom = Yii::$app->dater->serverDateTime($date_from . ' 00:00:00');
		}
		if(!empty($filter['date_to'])) {
			$date_to = date('Y-m-d', strtotime($filter['date_to']));
			$report->filter->filter->dateTo = Yii::$app->dater->serverDateTime($date_to . ' 23:59:59');
		}
		if(!empty($filter['operation_id_or_parent_id'])) {
			$ids = (array) $filter['operation_id_or_parent_id'];
			foreach($ids as &$ii) {
				$ii = (int) $ii;
			}
			$f = new TransferPaymentReportFilterBranch();
			$f->type = 'or';
			$f->filter = new TransferPaymentReportFilter();
			$f->filter->operationId = $ids;
			$f->filter->parentId = $ids;
			$report->filter->children[] = $f;
		}
		if(!empty($filter['operation_id'])) {
			$ids = (array) $filter['operation_id'];
			$report->filter->filter->operationId = $ids;
		}
		if(!empty($filter['parent_id'])) {
			$ids = (array) $filter['parent_id'];
			$report->filter->filter->parentId = $ids;
		}
		if(!empty($filter['account'])) {
			$report->filter->filter->paymentAccount = $filter['account'];
		}
		if(!empty($filter['word'])) {
			if(!is_numeric($filter['word'])) {
				$service = [];
				//				$criteria = new CDbCriteria();
				//				$criteria->compare('name', $filter['word'], true);
				//				$criteria->compare('service_name', $filter['word'], true, 'OR');
				//				/** @var Service[] $services */
				//				$services = ServiceDTO::model()->findAll($criteria);
				//				foreach ($services as $ss) {
				//					$service[] = $ss->service_id;
				//					if ($ss->children) {
				//						foreach ($ss->children as $c_ss) {
				//							$service[] = $c_ss->service_id;
				//						}
				//					}
				//				}
				//
				//				$criteria = new CDbCriteria();
				//				$criteria->condition = 'synonyms::TEXT ~* :match AND parent_id is NULL';
				//				$criteria->params['match'] = $filter['word'];
				//				$servs = ServiceDTO::model()->findAll($criteria);
				//				foreach ($services as $ss) {
				//					$service[] = $ss->service_id;
				//					if ($ss->children) {
				//						foreach ($ss->children as $c_ss) {
				//							$service[] = $c_ss->service_id;
				//						}
				//					}
				//				}
			}
			if(empty($service)) {
				$filter['account_or_operation_id_or_parent_id'] = $filter['word'];
			} else {
				$filter['service'] = $service;
			}
		}
		if(!empty($filter['account_or_operation_id_or_parent_id'])) {
			$p = $filter['account_or_operation_id_or_parent_id'];
			$f = new TransferPaymentReportFilterBranch();
			$f->type = 'or';
			$f->filter = new TransferPaymentReportFilter();
			$f->filter->paymentAccount = $p;
			if(is_numeric($p)) {
				$p = [(int) $p];
				$f->filter->operationId = $p;
				$f->filter->parentId = $p;
			}
			$report->filter->children[] = $f;
		}
		if(!empty($filter['service'])) {
			foreach($filter['service'] as &$s) {
				$s = (int) $s;
			}
			$report->filter->filter->serviceId = $filter['service'];
		}
		$report->filter->filter->viewType = empty($filter['viewType']) ? TransfersReportFilter::VIEW_TYPE_ALL : (int) $filter['viewType'];
		$report->limit = (int) $limit;
		$report->offset = (int) $offset;
		return $report->send();
	}
	
}
