<?php

/**
 * Файл из репозитория MikBill-PhoneBook-API
 * @link https://github.com/itpanda-llc/mikbill-phonebook-api
 */

declare(strict_types=1);

namespace Panda\MikBill\PhoneBookApi;

/**
 * Class Logic
 * @package Panda\MikBill\PhoneBookApi
 * Проверка запроса и формирование ответа
 */
class Logic
{
    /**
     * @var string|null Секрет
     */
    private $secret;

    /**
     * @var string|null Действие
     */
    private $action;

    /**
     * @var string|null Состояние аккаунта
     */
    private $state;

    /**
     * @var string Заголовок (HTTP-статус)
     */
    public $status = Status::OK_200;

    /**
     * @var string|null Контент
     */
    public $content;

    public function __construct()
    {
        $query = (empty($_GET)) ? $_POST : $_GET;

        $this->secret = (!empty($query[Param::SECRET]))
            ? $query[Param::SECRET]
            : null;
        $this->action = (!empty($query[Param::ACTION]))
            ? $query[Param::ACTION]
            : null;
        $this->state = (!empty($query[Param::STATE]))
            ? $query[Param::STATE]
            : null;
    }

    public function run(): void
    {
        if ($this->secret !== Auth::SECRET) {
            $this->status = Status::FORBIDDEN_403;
            $this->content = Response::getError(Message::AUTH_ERROR);

             return;
        }

        try {
            $actions = (new \ReflectionClass(Action::class))->getConstants();
        } catch (\ReflectionException $e) {
            throw new Exception\DebugException($e->getMessage());
        }

        if (!in_array($this->action, $actions, true)) {
            $this->status = Status::BAD_REQUEST_400;
            $this->content = Response::getError(Message::ACTION_ERROR);

            return;
        }

        if ($this->action === Action::GET) {
            if (!is_null($this->state)) {
                try {
                    $states = (new \ReflectionClass(State::class))->getConstants();
                } catch (\ReflectionException $e) {
                    throw new Exception\DebugException($e->getMessage());
                }

                if (!in_array((int) $this->state, $states, true)) {
                    $this->status = Status::BAD_REQUEST_400;
                    $this->content = Response::getError(Message::STATE_ERROR);

                    return;
                }
            }

            $contact = (is_null($this->state))
                ? Query::getAllContacts()
                : Query::getContact((int) $this->state);

            $this->content = (!is_null($contact))
                    ? Response::getContact($contact)
                    : Response::getError(Message::SEARCH_ACCOUNT_ERROR);

            return;
        }
    }
}
