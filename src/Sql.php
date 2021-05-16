<?php

/**
 * Файл из репозитория MikBill-Yealink-Phonebook-API
 * @link https://github.com/itpanda-llc/mikbill-yealink-phonebook-api
 */

namespace Panda\MikBill\Yealink\PhonebookApi;

/**
 * Class Sql
 * @package Panda\MikBill\Yealink\PhonebookApi
 * SQL-запросы
 */
class Sql
{
    /**
     * Получение контактов по состоянию аккаунта
     */
    public const GET_CONTACT = "
        SELECT
            CONCAT_WS(
                ' ',
                `users`.`uid`,
                SUBSTRING(
                    `users`.`fio`,
                    LOCATE(
                        ' ',
                        `users`.`fio`
                    ) + 1
                ),
                SUBSTRING(
                    `users`.`fio`,
                    1,
                    LOCATE(
                        ' ',
                        `users`.`fio`
                    ) - 1
                )
            ) AS
                `" . Field::NAME . "`,
            (
                CASE
                    WHEN
                        (
                            `users`.`phone` IS NOT NULL
                                AND
                            `users`.`phone` != '' 
                        )
                    THEN
                        `users`.`phone`
                    WHEN
                        (
                            `users`.`mob_tel` IS NOT NULL
                                AND
                            `users`.`mob_tel` != '' 
                        )
                    THEN
                        `users`.`mob_tel`
                    WHEN
                        (
                            `users`.`sms_tel` IS NOT NULL
                                AND
                            `users`.`sms_tel` != '' 
                        )
                    THEN
                        `users`.`sms_tel`
                END
            ) AS
                `" . Field::PHONE. "`
        FROM
            `users`
        WHERE
            `users`.`state` = " . Holder::STATE . "
                AND
            `users`.`fio` != ''
                AND
            (
                (
                    `users`.`phone` IS NOT NULL
                        AND
                    `users`.`phone` != ''
                )
                    OR
                (
                    `users`.`mob_tel` IS NOT NULL
                        AND
                    `users`.`mob_tel` != ''
                )
                    OR
                (
                    `users`.`sms_tel` IS NOT NULL
                        AND
                    `users`.`sms_tel` != ''
                )
            )
        ORDER BY
            `users`.`uid`
        LIMIT
            1000";

    /**
     * Получение всех контактов
     */
    public const GET_ALL_CONTACTS = "
        SELECT
            CONCAT_WS(
                ' ',
                `users`.`uid`,
                SUBSTRING(
                    `users`.`fio`,
                    LOCATE(
                        ' ',
                        `users`.`fio`
                    ) + 1
                ),
                SUBSTRING(
                    `users`.`fio`,
                    1,
                    LOCATE(
                        ' ',
                        `users`.`fio`
                    ) - 1
                )
            ) AS
                `" . Field::NAME . "`,
            (
                CASE
                    WHEN
                        (
                            `users`.`phone` IS NOT NULL
                                AND
                            `users`.`phone` != '' 
                        )
                    THEN
                        `users`.`phone`
                    WHEN
                        (
                            `users`.`mob_tel` IS NOT NULL
                                AND
                            `users`.`mob_tel` != '' 
                        )
                    THEN
                        `users`.`mob_tel`
                    WHEN
                        (
                            `users`.`sms_tel` IS NOT NULL
                                AND
                            `users`.`sms_tel` != '' 
                        )
                    THEN
                        `users`.`sms_tel`
                END
            ) AS
                `" . Field::PHONE. "`
        FROM
            `users`
        WHERE
            `users`.`fio` != ''
                AND
            (
                (
                    `users`.`phone` IS NOT NULL
                        AND
                    `users`.`phone` != ''
                )
                    OR
                (
                    `users`.`mob_tel` IS NOT NULL
                        AND
                    `users`.`mob_tel` != ''
                )
                    OR
                (
                    `users`.`sms_tel` IS NOT NULL
                        AND
                    `users`.`sms_tel` != ''
                )
            )
        ORDER BY
            `users`.`uid`
        LIMIT
            1000";
}
