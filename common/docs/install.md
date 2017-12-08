Установка
==============

Настроить path для:
 
 * php
 * composer
 * codecept

Создать БД:

* для разработки
* для тестирования

Создать проект

```
composer create-project --prefer-dist yii2lab/yii2-app-advanced yii-application
```

Установить ``oauth-token`` от ``Github``

```
composer config -g github-oauth.github.com <токен>
```

Удалить плагин ``Composer`` для зависимостей ``bower`` и ``npm``

```
composer global remove "fxp/composer-asset-plugin"
```

Загрузить зависимости для разработки

```
composer install
```

Если разворачиваете на боевом сервере, то

```
composer install --no-dev
```

Инициализировать проект

```
php init
```

Выполнить миграции основной и тестовой БД

```
php yii migrate
```

```
php yii_test migrate
```

Выполнить иморт демо-данных в БД для разработки

```
php yii fixtures
```
