<?php

namespace common\enums\rbac;

use yii2lab\misc\enums\BaseEnum;

/**
 * Class RoleEnum
 *
 * Этот класс был сгенерирован автоматически.
 * Не вносите в данный файл изменения, они затрутся при очередной генерации
 *
 * @package common\enums\rbac
 */
class RoleEnum extends BaseEnum {

	const ADMINISTRATOR = 'rAdministrator';
	const NAL_INSP = 'rNalInsp';
	const USER = 'rUser';
	const UNKNOWN_USER = 'rUnknownUser';
	const RESMI_UNKNOWN_USER = 'rResmiUnknownUser';
	const MERCHANT_BILLING = 'rMerchantBilling';
	const MERCHANT = 'rMerchant';
	const MERCHANT_SMPP = 'rMerchantSmpp';
	const MERCHANT_BEELINE_DIRECT_PAYMENT = 'rMerchantBeelineDirectPayment';
	const AGENT = 'rAgent';
	const AGENT_SMPP = 'rAgentSmpp';
	const SUB_AGENT = 'rSubAgent';
	const EMITENT = 'rEmitent';
	const EMITENT_MARKETOLOG = 'rEmitentMarketolog';
	const EMITENT_OPERATIONAL = 'rEmitentOperational';
	const EMITENT_PAY_WATCHER = 'rEmitentPayWatcher';
	const MODERATOR = 'rModerator';
	const MARKETOLOG = 'rMarketolog';
	const GUEST = 'rGuest';
	const AUTHORIZED = 'rAuthorized';
	const ALL = 'rAll';
	const OPERATOR_SPP = 'rOperatorSPP';
	const JUST_REGISTERED = 'rJustRegistered';
	const CONTENT_MANAGER = 'rContentManager';
	const TECH_SPECIALIST = 'rTechSpecialist';
	const MOBILE_DEVELOPER = 'rMobileDeveloper';
	const OPERATOR_MT100 = 'rOperatorMT100';
	const FINANCE_SPECIALIST = 'rFinanceSpecialist';
	const WPFINANCE_SPECIALIST = 'rWPFinanceSpecialist';
	const TEXT_PAGES_MANAGER = 'rTextPagesManager';
	const PROMOTER = 'rPromoter';
	const CRON = 'rCron';
	const SUB_SUB_AGENT = 'rSubSubAgent';
	const SUB_SUB_AGENTS_MANAGER = 'rSubSubAgentsManager';
	const PROMO_MANAGER = 'rPromoManager';
	const EMPLOYEE = 'rEmployee';
	const MERCHANT_SMART = 'rMerchantSmart';
	const TESTER = 'rTester';
	const PSEUDO_USER = 'rPseudoUser';
	const LOANS_REPAYMENT_SPECIALIST = 'rLoansRepaymentSpecialist';
	const USER_NOT_WORKSHEET = 'rUserNotWorksheet';
	const SECURITY_OFFICER = 'rSecurityOfficer';
	const ADDRESSLESS_TRANSFER_USER = 'rAddresslessTransferUser';
	const TRANSFER_USER = 'rTransferUser';
	const BPADMIN = 'rBPAdmin';
	const BPSUPPORT_USER = 'rBPSupportUser';
	const RESMI_ADMIN = 'rResmiAdmin';
	const RESMI_SPPADMIN = 'rResmiSPPAdmin';
	const RESMI_SUPPORT_USER = 'rResmiSupportUser';
	const ACCOUNT_MANAGER = 'rAccountManager';
	const POST_EXPRESS_ADMIN = 'rPostExpressAdmin';
	const POST_EXPRESS_OPERATOR = 'rPostExpressOperator';
	const VIEW_POST_EXPRESS_REPORTS = 'rViewPostExpressReports';
	const PARTNER_AUDITOR = 'rPartnerAuditor';
	const SUBAGENT_AUDITOR = 'rSubagentAuditor';
	const AGENT_OPERATOR = 'rAgentOperator';
	const MERCHANT_OPERATOR = 'rMerchantOperator';
	const SUB_AGENT_OPERATOR = 'rSubAgentOperator';
	const SUBAGENT_REPORTS = 'rSubagentReports';
	const BROKER_ACCOUNT = 'rBrokerAccount';
	const SUB_AGENT_WITH_CASH_OUT = 'rSubAgentWithCashOut';
	const SUB_MERCHANT = 'rSubMerchant';

}