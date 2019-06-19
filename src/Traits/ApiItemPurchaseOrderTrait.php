<?php

declare(strict_types = 1);

namespace Nefedov89\WaspIntegration\Traits;

/**
 * Trait ApiItemPurchaseOrderTrait
 *
 * @package Nefedov89\WaspIntegration\Traits
 */
trait ApiItemPurchaseOrderTrait
{
    /**
     * @param array $request
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function purchaseOrderCreate(array $request)
    {
        return $this->request(
            'POST',
            'ic/purchaseorder/create',
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
    public function purchaseOrderUpdate(array $request)
    {
        return $this->request(
            'POST',
            'ic/purchaseorder/update',
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
    public function purchaseOrderAdvancedInfoSearch(array $request)
    {
        return $this->request(
            'POST',
            'ic/purchaseorder/advancedinfosearch',
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
    public function purchaseOrderPurchaseOrderSearch(array $request)
    {
        return $this->request(
            'POST',
            'ic/purchaseorder/purchaseordersearch',
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
    public function purchaseOrderGetOrdersByNumber(array $request)
    {
        return $this->request(
            'POST',
            'ic/purchaseorder/getordersbynumber',
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
    public function purchaseOrderDeleteOrdersByNumber(array $request)
    {
        return $this->request(
            'POST',
            'ic/purchaseorder/deleteordersbynumber',
            $request
        );
    }
}
