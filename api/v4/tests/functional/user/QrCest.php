<?php

namespace api\v4\tests\functional\user;

use api\tests\FunctionalTester;
use api\tests\functional\enums\AccountEnum;
use api\v4\tests\functional\enums\UserEnum;
use common\fixtures\QrCacheFixture;
use common\fixtures\UserProfileFixture;
use yii2lab\test\RestCest;
use Codeception\Util\HttpCode;
use yii2lab\test\Util\Type;
use yii2woop\common\components\RBACRoles;

class QrCest extends RestCest
{
	const URI = 'profile-qr';
	
	public $format = [
		'text' => Type::STRING,
		'hash' => Type::STRING,
		'url' => Type::URL,
	];
	
	public function fixtures() {
		$this->unloadFixtures([
			QrCacheFixture::className(),
		]);
	}

	public function getInfo(FunctionalTester $I)
	{
		$I->auth(UserEnum::EXISTED_LOGIN);
		$I->sendGET(self::URI);
		$I->seeResponseCodeIs(HttpCode::OK);
		$I->seeResponseMatchesJsonType($this->format);
	}
	
}