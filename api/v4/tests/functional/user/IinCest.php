<?php

namespace api\v4\tests\functional\user;

use api\tests\FunctionalTester;
use yii2lab\test\RestCest;
use Codeception\Util\HttpCode;
use yii2lab\test\Util\Type;

class IinCest extends RestCest
{
	const URI = 'user-iin';
	
	const EXISTED_ITEM = '950318351178';
	const NOT_EXISTED_ITEM = '950318351179';
	const NOT_VALID_ITEM = '9503183511798';
	
	public $format = [
		'first_name' => Type::STRING,
		'last_name' => Type::STRING,
		'iin' => Type::STRING,
		'birth_date' => Type::DATE,
		'sex' => Type::BOOLEAN_OR_NULL,
	];
	
	public function getInfo(FunctionalTester $I)
	{
		$I->sendGET(self::URI . SL . self::EXISTED_ITEM);
		$I->seeResponseCodeIs(HttpCode::OK);
		$I->seeResponseMatchesJsonType($this->format);
	}
	
	public function getNotExistedInfo(FunctionalTester $I)
	{
		$I->sendGET(self::URI . SL . self::NOT_EXISTED_ITEM);
		$I->seeResponseCodeIs(HttpCode::NOT_FOUND);
	}
	
	public function getNotValid(FunctionalTester $I)
	{
		$I->sendGET(self::URI . SL . self::NOT_VALID_ITEM);
		$I->seeResponseCodeIs(HttpCode::NOT_FOUND);
	}
	
}