<?php

/**
 * Файл из репозитория MikBill-PhoneBook-API
 * @link https://github.com/itpanda-llc/mikbill-phonebook-api
 */

namespace Panda\MikBill\PhoneBookApi;

/**
 * Class Content
 * @package Panda\MikBill\PhoneBookApi
 * Заголовок ответа (Тип контента)
 */
class Content
{
    /**
     * text/xml
     */
    public const TEXT_XML = 'Content-Type: text/xml;charset=' . Charset::UTF_8;
}
