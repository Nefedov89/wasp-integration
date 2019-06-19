<?php

declare(strict_types = 1);

namespace Nefedov89\WaspIntegration\Traits;

/**
 * Trait ApiTransactionsTrait
 *
 * @package Nefedov89\WaspIntegration\Traits
 */
trait ApiTransactionsTrait
{
    /**
     * @param array $request
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function transactionsGridQueryTransactionHistory(array $request)
    {
        return $this->request(
            'POST',
            'transactions/grid-query/transaction-history',
            $request
        );
    }

    /**
     * @param array $request
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function transactionsItemAdd(array $request)
    {
        return $this->request(
            'POST',
            'transactions/item/add',
            $request
        );
    }

    /**
     * @param array $request
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function transactionsItemRemove(array $request)
    {
        return $this->request(
            'POST',
            'transactions/item/remove',
            $request
        );
    }

    /**
     * @param array $request
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function transactionsItemAdjust(array $request)
    {
        return $this->request(
            'POST',
            'transactions/item/adjust',
            $request
        );
    }

    /**
     * @param array $request
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function transactionsItemMove(array $request)
    {
        return $this->request(
            'POST',
            'transactions/item/move',
            $request
        );
    }
}
