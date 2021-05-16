<?php

/**
 * Файл из репозитория MikBill-Yealink-Phonebook-API
 * @link https://github.com/itpanda-llc/mikbill-yealink-phonebook-api
 */

namespace Panda\MikBill\Yealink\PhonebookApi;

/**
 * Class Tag
 * @package Panda\MikBill\Yealink\PhonebookApi
 * Наименования полей в ответе
 */
class Tag
{
    /**
     * Сообщение
     */
    public const MESSAGE = 'Message';

    /**
     * Главный
     */
    public const YEALINK_IP_PHONE_DIRECTORY = 'YealinkIPPhoneDirectory';

    /**
     * Контакт
     */
    public const DIRECTORY_ENTRY = 'DirectoryEntry';

    /**
     * Имя
     */
    public const NAME = 'Name';

    /**
     * Телефон
     */
    public const TELEPHONE = 'Telephone';
}
