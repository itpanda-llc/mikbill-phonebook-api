<?php

/**
 * Файл из репозитория MikBill-PhoneBook-API
 * @link https://github.com/itpanda-llc/mikbill-phonebook-api
 */

declare(strict_types=1);

namespace Panda\MikBill\PhoneBookApi;

/**
 * Class Response
 * @package Panda\MikBill\PhoneBookApi
 * Формирование ответа
 */
class Response
{
    /**
     * @param string $message Сообщение
     * @return string Контент
     */
    public static function getError(string $message): string
    {
        $sxe = self::getXmlElement();

        $sxe->addChild(Tag::MESSAGE, $message);

        return $sxe->asXML();
    }

    /**
     * @param array $contact Список контактов
     * @return string Контент
     */
    public static function getContact(array $contact): string
    {
        $sxe = self::getXmlElement();

        foreach ($contact as $v) {
            $entry = $sxe->addChild(Tag::DIRECTORY_ENTRY);

            $entry->addChild(Tag::NAME, $v[Field::NAME]);
            $entry->addChild(Tag::TELEPHONE, $v[Field::PHONE]);
        }

        return $sxe->asXML();
    }

    /**
     * @return \SimpleXMLElement Объект контента
     */
    private static function getXmlElement(): \SimpleXMLElement
    {
        try {
            return new \SimpleXMLElement(
                sprintf("<?xml version=\"1.0\" encoding=\"%s\"?><%s/>",
                    Charset::UTF_8,
                    Tag::VENDOR_IP_PHONE_DIRECTORY));
        } catch (\Exception $e) {
            throw new Exception\DebugException($e->getMessage());
        }
    }
}
