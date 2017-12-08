<?php

namespace api\v4\tests\functional\user;

use api\tests\FunctionalTester;
use api\tests\functional\enums\AccountEnum;
use api\v4\tests\functional\enums\UserEnum;
use yii2lab\test\RestCest;
use Codeception\Util\HttpCode;
use yii2lab\test\Util\Type;

class BalanceCest extends RestCest
{
	const URI = 'balance';
	
	public $format = [
		'blocked' => Type::FLOAT,
		'active' => Type::FLOAT,
		'pay_delayed' => Type::FLOAT,
		'acc_base' => Type::FLOAT,
		'acc_commission' => Type::FLOAT,
	];
	
	public function getSelf(FunctionalTester $I)
	{
		$I->auth(AccountEnum::USER);
		$I->sendGET(self::URI);
		$I->seeResponseCodeIs(HttpCode::OK);
		$I->seeResponseMatchesJsonType($this->format);
	}
	
	public function getSelfNotAuth(FunctionalTester $I)
	{
		$I->sendGET(self::URI);
		$I->seeResponseCodeIs(HttpCode::UNAUTHORIZED);
	}
	
}