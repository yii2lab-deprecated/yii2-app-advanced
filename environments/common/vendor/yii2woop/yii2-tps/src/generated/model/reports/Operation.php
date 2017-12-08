<?php
namespace yii2woop\generated\model\reports;

use yii2woop\generated\enums\OperationStatus;
use yii2woop\generated\enums\OperationType;
use yii2woop\generated\enums\SubjectType;
use yii2woop\generated\model\ReportRow;

/**
 * Automatically generated
 *
 * @author Vitaliy_Pavlikov
 */
class Operation extends ReportRow {
	/**
	 * @var int|null
	 */
	public $id;
	
	/**
	 * @var int|null
	 */
	public $parentId;
	
	/**
	 * @var string|null
	 */
	public $direction;
	
	/**
	 * @var string|null
	 */
	public $subjectFrom;
	
	/**
	 * @var string|null
	 */
	public $subjectTo;
	
	/**
	 * @var string|null
	 */
	public $specialist;
	
	/**
	 * @var int|null
	 */
	public $accDebId;
	
	/**
	 * @var int|null
	 */
	public $accCredId;
	
	/**
	 * @var float|null
	 */
	public $amount;
	
	/**
	 * @var int|null
	 */
	public $currency;
	
	/**
	 * @var \DateTime|null
	 */
	public $dateOper;
	
	/**
	 * @var \DateTime|null
	 */
	public $dateDone;
	
	/**
	 * @var int|null
	 */
	public $dateModify;
	
	/**
	 * @var OperationStatus|null
	 */
	public $status;
	
	/**
	 * @var string|null
	 */
	public $description;
	
	/**
	 * @var int|null
	 */
	public $supervision;
	
	/**
	 * @var int|null
	 */
	public $serviceId;
	
	/**
	 * @var int|null
	 */
	public $orderId;
	
	/**
	 * @var OperationType|null
	 */
	public $type;
	
	/**
	 * @var int|null
	 */
	public $productId;
	
	/**
	 * @var int|null
	 */
	public $subjectFromId;
	
	/**
	 * @var int|null
	 */
	public $subjectToId;
	
	/**
	 * @var int|null
	 */
	public $specialistId;
	
	/**
	 * @var string|null
	 */
	public $subjectFromLastName;
	
	/**
	 * @var string|null
	 */
	public $subjectFromFirstName;
	
	/**
	 * @var string|null
	 */
	public $subjectFromMiddleName;
	
	/**
	 * @var string|null
	 */
	public $subjectToLastName;
	
	/**
	 * @var string|null
	 */
	public $subjectToFirstName;
	
	/**
	 * @var string|null
	 */
	public $subjectToMiddleName;
	
	/**
	 * @var string|null
	 */
	public $specialistLastName;
	
	/**
	 * @var string|null
	 */
	public $specialistFirstName;
	
	/**
	 * @var string|null
	 */
	public $specialistMiddleName;
	
	/**
	 * @var float|null
	 */
	public $commissionLower;
	
	/**
	 * @var float|null
	 */
	public $commissionUpper;
	
	/**
	 * @var float|null
	 */
	public $commissionUpperLower;
	
	/**
	 * @var SubjectType|null
	 */
	public $subjectFromType;
	
	/**
	 * @var SubjectType|null
	 */
	public $subjectToType;
	
	/**
	 * @var float|null
	 */
	public $retSum;
	
	/**
	 * @var string|null
	 */
	public $paymentAccount;
	
	/**
	 * @var string|null
	 */
	public $reqStat;
	
	/**
	 * @var string|null
	 */
	public $externalId;
	
	/**
	 * @var float|null
	 */
	public $agentCommissionUpper;
	
	/**
	 * @var float|null
	 */
	public $agentCommissionLower;
	
	/**
	 * @var float|null
	 */
	public $agentRetSum;
	
	/**
	 * @var string|null
	 */
	public $commissionInfo;
	
	/**
	 * @var int|null
	 */
	public $parentSubjectFromId;
	
	/**
	 * @var int|null
	 */
	public $parentSubjectToId;
	
	/**
	 * @var int|null
	 */
	public $parentSpecialistId;
	
	/**
	 * @var OperationType|null
	 */
	public $parentType;
	
	/**
	 * @var int|null
	 */
	public $parentServiceId;
	
	/**
	 * @var string|null
	 */
	public $document;
	
	/**
	 * @var object|null
	 */
	public $billingInfo;
	public $fields;
	
	public function rules() {
		return array_merge(parent::rules(), [
			[['id'], 'double'],
			[['parentId'], 'double'],
			[['accDebId'], 'double'],
			[['accCredId'], 'double'],
			[['amount'], 'double'],
			[['currency'], 'double'],
			[['dateOper'], 'date', 'format' => ['yyyy-MM-dd', 'yyyy-MM-dd HH:mm:ss']],
			[['dateDone'], 'date', 'format' => ['yyyy-MM-dd', 'yyyy-MM-dd HH:mm:ss']],
			[['dateModify'], 'double'],
			[['supervision'], 'double'],
			[['serviceId'], 'double'],
			[['orderId'], 'double'],
			[['productId'], 'double'],
			[['subjectFromId'], 'double'],
			[['subjectToId'], 'double'],
			[['specialistId'], 'double'],
			[['commissionLower'], 'double'],
			[['commissionUpper'], 'double'],
			[['commissionUpperLower'], 'double'],
			[['retSum'], 'double'],
			[['agentCommissionUpper'], 'double'],
			[['agentCommissionLower'], 'double'],
			[['agentRetSum'], 'double'],
			[['parentSubjectFromId'], 'double'],
			[['parentSubjectToId'], 'double'],
			[['parentSpecialistId'], 'double'],
			[['parentServiceId'], 'double'],
			[
				[
					'direction',
					'fields',
					'subjectFrom',
					'subjectTo',
					'specialist',
					'status',
					'description',
					'type',
					'subjectFromLastName',
					'subjectFromFirstName',
					'subjectFromMiddleName',
					'subjectToLastName',
					'subjectToFirstName',
					'subjectToMiddleName',
					'specialistLastName',
					'specialistFirstName',
					'specialistMiddleName',
					'subjectFromType',
					'subjectToType',
					'paymentAccount',
					'reqStat',
					'externalId',
					'commissionInfo',
					'parentType',
					'document',
					'billingInfo',
				],
				'safe',
			],
		]);
	}
	
}