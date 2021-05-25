<?php

/**
 * Файл из репозитория MikBill-PhoneBook-API
 * @link https://github.com/itpanda-llc/mikbill-phonebook-api
 */

declare(strict_types=1);

namespace Panda\MikBill\PhoneBookApi;

/**
 * Class Query
 * @package Panda\MikBill\PhoneBookApi
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
