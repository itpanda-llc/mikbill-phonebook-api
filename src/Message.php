<?php

/**
 * Файл из репозитория MikBill-Yealink-Phonebook-API
 * @link https://github.com/itpanda-llc/mikbill-yealink-phonebook-api
 */

namespace Panda\MikBill\Yealink\PhonebookApi;

/**
 * Class Text
 * @package Panda\MikBill\Yealink\PhonebookApi
 * Сообщения ответа
 */
class Message
{
    /**
     * Код: 1
     */
    public const AUTH_ERROR = 'Аутентификация не выполнена';

    /**
     * Код: 1
     */
    public const ACTION_ERROR = 'Некорректная команда';

    /**
     * Код: 1
     */
    public const STATE_ERROR = 'Некорректное состояние аккаунтов';

    /**
     * Код: 1
     */
    public const SEARCH_ACCOUNT_ERROR = 'Контакты не найдены';
}
