<?php

/**
 * Файл из репозитория MikBill-PhoneBook-API
 * @link https://github.com/itpanda-llc/mikbill-phonebook-api
 */

namespace Panda\MikBill\PhoneBookApi;

/**
 * Class Message
 * @package Panda\MikBill\PhoneBookApi
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
