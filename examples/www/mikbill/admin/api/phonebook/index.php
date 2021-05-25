<?php

/**
 * Файл из репозитория MikBill-PhoneBook-API
 * @link https://github.com/itpanda-llc/mikbill-phonebook-api
 */

declare(strict_types=1);

/**
 * Путь к конфигурационному файлу MikBill
 * @link https://wiki.mikbill.pro/billing/config_file
 */
const CONFIG =  '/var/www/mikbill/admin/app/etc/config.xml';

require_once '/var/mikbill/__ext/vendor/autoload.php';

use Panda\MikBill\PhoneBookApi;

header(PhoneBookApi\Content::TEXT_XML);

$logic = new PhoneBookApi\Logic;

try {
    $logic->run();

    header($logic->status);
    print_r($logic->content);
} catch (PhoneBookApi\Exception\SystemException
    | PhoneBookApi\Exception\DebugException $e) {
    header(PhoneBookApi\Status::INTERNAL_500);
    print_r(PhoneBookApi\Response::getError($e->getMessage()));
}
