Концепции разработки
===

* не создавать контроллеры, модели в приложении. 
Вместо этого используем другой подход:
раксладываем код по отдельным модулям.

Например, весь функционал юзера хранится по папкам:

* апи модуль
* веб-модуль
* доменный слой

Идея в следующем: 

* собираем код в самостоятельные модули
* можем безболезненно отключить модуль через конфиг
* можем собрать модуль в composer-пакет, так как это самостоятельный функционал

Доменный слой храним в папке `domain`.

В архитектуру заложена версионность **доменного слоя** и **API приложения**.