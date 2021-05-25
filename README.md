# MikBill-PhoneBook-API

API для интеграции биллинговой системы ["MikBill"](https://mikbill.pro) с IP-телефонами

[![Packagist Downloads](https://img.shields.io/packagist/dt/itpanda-llc/mikbill-phonebook-api)](https://packagist.org/packages/itpanda-llc/mikbill-phonebook-api/stats)
![Packagist License](https://img.shields.io/packagist/l/itpanda-llc/mikbill-phonebook-api)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/itpanda-llc/mikbill-phonebook-api)

## Ссылки

* [Разработка](https://github.com/itpanda-llc)
* [О проекте (MikBill)](https://mikbill.pro)
* [Документация (MikBill)](https://wiki.mikbill.pro)

## Возможности

* Получение списка контактов аккаунтов

## Требования

* PHP >= 7.2
* libxml
* PDO
* SimpleXML

## Установка

```shell script
composer require itpanda-llc/mikbill-phonebook-api
```

## Конфигурация

Указание в файлах

* Параметров аутентификации в ["Auth.php"](src/Auth.php)
* Параметров вендора в ["Vendor.php"](src/Vendor.php)
* Путей к [конфигурационному файлу](https://wiki.mikbill.pro/billing/config_file) и интерфейсу в ["index.php"](examples/www/mikbill/admin/api/phonebook/index.php), предварительно размещенного в каталоге веб-сервера

## Примеры запросов к интерфейсу

Отображение контактов всех аккаунтов

```text
%URL%?secret=%SECRET%&action=get
```

Отображение контактов удаленных аккаунтов

```text
%URL%?secret=%SECRET%&action=get&state=4
```
