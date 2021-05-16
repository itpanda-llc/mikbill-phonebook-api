<?php

/**
 * Файл из репозитория MikBill-Yealink-Phonebook-API
 * @link https://github.com/itpanda-llc/mikbill-yealink-phonebook-api
 */

declare(strict_types=1);

namespace Panda\MikBill\Yealink\PhonebookApi;

/**
 * Class Query
 * @package Panda\MikBill\Yealink\PhonebookApi
 * Запросы к БД
 */
class Query
{
    /**
     * @param int|null $state Состояние аккаунта
     * @return array|null Список контактов
     */
    public static function getContact(int $state): ?array
    {
        $sth = Statement::prepare(Sql::GET_CONTACT);

        $sth->bindParam(Holder::STATE, $state);

        Statement::execute($sth);

        return (($result = $sth->fetchAll(\PDO::FETCH_ASSOC)) !== [])
            ? $result
            : null;
    }

    /**
     * @return array|null Список контактов
     */
    public static function getAllContacts(): ?array
    {
        $sth = Statement::query(Sql::GET_ALL_CONTACTS);

        return (($result = $sth->fetchAll(\PDO::FETCH_ASSOC)) !== [])
            ? $result
            : null;
    }
}
