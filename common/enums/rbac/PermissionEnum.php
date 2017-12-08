<?php

namespace common\enums\rbac;

use yii2lab\misc\enums\BaseEnum;

/**
 * Class PermissionEnum
 *
 * Этот класс был сгенерирован автоматически.
 * Не вносите в данный файл изменения, они затрутся при очередной генерации
 *
 * @package common\enums\rbac
 */
class PermissionEnum extends BaseEnum {

	const BACKEND_ALL = 'backend.*';
	const GEO_CITY_MANAGE = 'geo.city.manage';
	const GEO_COUNTRY_MANAGE = 'geo.country.manage';
	const GEO_CURRENCY_MANAGE = 'geo.currency.manage';
	const SERVICE_CATEGORY_MANAGE = 'service.category.manage';
	const SERVICE_SERVICE_MANAGE = 'service.service.manage';
	const REST_CLIENT_ALL = 'rest-client.*';
	const USER_PROFILE_ALL = 'user.profile.*';
	const ACTIVE_FIELD_MANAGE = 'active.field.manage';
	const ACTIVE_TYPE_MANAGE = 'active.type.manage';
	const GEO_REGION_MANAGE = 'geo.region.manage';
	const NOTIFY_TRANSPORT_MANAGE = 'notify.transport.manage';
	const ARTICLE_POST_MANAGE = 'article.post.manage';
	const ARTICLE_POST_DELETE = 'article.post.delete';
	const OFFLINE_MANAGE = 'offline.manage';
	const RBAC_MANAGE = 'rbac.manage';
	const GITHUB_MANAGE = 'github.manage';
	const LOGREADER_MANAGE = 'logreader.manage';
	const GII_MANAGE = 'gii.manage';
	const LANG_MANAGE = 'lang.manage';
	const CLEANER_MANAGE = 'cleaner.manage';
	const NOTIFY_MANAGE = 'notify.manage';
	const APP_CONFIG = 'app.config';
	const GUIDE_MODIFY = 'guide.modify';

}