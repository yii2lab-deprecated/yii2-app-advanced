RBAC: разрешения
==============

Разрешения регулируют доступ отдельных контроллеров, модулей и ресурсов проекта

## Основные ссылки

Список разрешений

```
{{domain.name}}/rbac/permission
```

Создание разрешения

```
{{domain.name}}/rbac/permission/create
```

Обозревание разрешения

```
{{domain.name}}/rbac/permission/view?id={{permission.id}}
```

## Правила создания разрешений

Следует указывать наиболее информативно указывать дислакацию на которую распространяется это 
разрешение в его названии.
Например
```
	service.service.manage
```

данное разрешение указан в формате
```
	модуль.моделью.функция
``` 

## Расширение разрешений

В обозревателе разрешения можно указать разрешения которые будет включать в себя текущее разрешение.