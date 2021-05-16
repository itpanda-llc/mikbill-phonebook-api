<?php

/**
 * Файл из репозитория MikBill-Yealink-Phonebook-API
 * @link https://github.com/itpanda-llc/mikbill-yealink-phonebook-api
 */

namespace Panda\MikBill\Yealink\PhonebookApi;

/**
 * Class Content
 * @package Panda\MikBill\Yealink\PhonebookApi
 * Заголовок ответа (Тип контента)
 */
class Content
{
    /**
     * text/xml
     */
    public const TEXT_XML = 'Content-Type: text/xml;charset=' . Charset::UTF_8;
}
