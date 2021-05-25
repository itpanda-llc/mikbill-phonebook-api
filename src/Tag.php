<?php

/**
 * Файл из репозитория MikBill-PhoneBook-API
 * @link https://github.com/itpanda-llc/mikbill-phonebook-api
 */

namespace Panda\MikBill\PhoneBookApi;

/**
 * Class Tag
 * @package Panda\MikBill\PhoneBookApi
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
    public const VENDOR_IP_PHONE_DIRECTORY = Vendor::NAME . 'IPPhoneDirectory';

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
