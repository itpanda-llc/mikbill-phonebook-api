<?php

/**
 * Файл из репозитория MikBill-Yealink-Phonebook-API
 * @link https://github.com/itpanda-llc/mikbill-yealink-phonebook-api
 */

declare(strict_types=1);

/**
 * Путь к конфигурационному файлу MikBill
 * @link https://wiki.mikbill.pro/billing/config_file
 */
const CONFIG =  '/var/www/mikbill/admin/app/etc/config.xml';

require_once '/var/mikbill/__ext/vendor/autoload.php';

use Panda\MikBill\Yealink\PhonebookApi;

header(PhonebookApi\Content::TEXT_XML);

$logic = new PhonebookApi\Logic;

try {
    $logic->run();

    header($logic->status);
    print_r($logic->content);
} catch (PhonebookApi\Exception\SystemException
    | PhonebookApi\Exception\DebugException $e) {
    header(PhonebookApi\Status::INTERNAL_500);
    print_r(PhonebookApi\Response::getError($e->getMessage()));
}
