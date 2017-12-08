<?php

namespace common\helpers;

use yii2lab\misc\enums\BaseEnum;

class Driver extends BaseEnum {
	
	const ACTIVE_RECORD = 'ar';
	const DISC = 'disc';
	const CORE = 'core';
	const TPS = 'tps';
	const FILE = 'file';
	const UPLOAD = 'upload';
	const SESSION = 'session';
	const REST = 'rest';
	const TEST = 'test';
	const API = 'api';
	const GATE = 'gate';
	const MEMORY = 'memory';
	const YII = 'yii';
	const MOCK = 'mock';
	
	public static function remote($withTest = false) {
		$driver = env('remote.driver');
		if($driver == self::CORE) {
			return $driver;
		}
		return self::test($driver, $withTest);
	}
	
	public static function test($driver = null, $test = self::TEST) {
		if(!YII_ENV_TEST || !$test) {
			return $driver;
		}
		$driver = is_string($test) ? $test : self::TEST;
		return $driver;
	}
	
}
