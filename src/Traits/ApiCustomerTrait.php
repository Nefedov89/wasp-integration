<?php

declare(strict_types = 1);

namespace Nefedov89\WaspIntegration\Traits;

/**
 * Trait ApiCustomerTrait
 *
 * @package Nefedov89\WaspIntegration\Traits
 */
trait ApiCustomerTrait
{
    /**
     * @param array $request
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function customersCreateNew(array $request)
    {
        return $this->request(
            'POST',
            'customers/createNew',
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
    public function customersUpdateExisting(array $request)
    {
        return $this->request(
            'POST',
            'customers/updateExisting',
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
    public function customersSave(array $request)
    {
        return $this->request(
            'POST',
            'customers/save',
            $request
        );
    }
}
