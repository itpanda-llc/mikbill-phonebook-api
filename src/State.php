<?php

/**
 * Файл из репозитория MikBill-PhoneBook-API
 * @link https://github.com/itpanda-llc/mikbill-phonebook-api
 */

namespace Panda\MikBill\PhoneBookApi;

/**
 * Class State
 * @package Panda\MikBill\PhoneBookApi
 * Состояния аккаунтов
 */
class State
{
    /**
     * Обычный
     */
    public const _1 = 1;

    /**
     * Замороженный
     */
    public const _2 = 2;

    /**
     * Отключенный
     */
    public const _3 = 3;

    /**
     * Удаленный
     */
    public const _4 = 4;
}
