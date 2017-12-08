<?php
namespace frontend\tests\acceptance;

use Yii;
use frontend\tests\AcceptanceTester;
use yii\helpers\Url;

class HomeCest
{
	public function checkHome(AcceptanceTester $I)
	{
		$I->amOnPage(\Yii::$app->homeUrl);
		$I->see('Galaka');
		$I->seeLink('Yii Framework');
	}
}
