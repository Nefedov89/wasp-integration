<?php

declare(strict_types = 1);

namespace Nefedov89\WaspIntegration\Traits;

/**
 * Trait ApiItemPickPackShipOrderTrait
 *
 * @package Nefedov89\WaspIntegration\Traits
 */
trait ApiItemPickPackShipOrderTrait
{
    /**
     * @param array $request
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function pickPackShipOrderCreate(array $request)
    {
        return $this->request(
            'POST',
            'ic/pickpackshiporder/create',
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
    public function pickPackShipOrderUpdate(array $request)
    {
        return $this->request(
            'POST',
            'ic/pickpackshiporder/update',
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
    public function pickPackShipOrderAdvancedInfoSearch(array $request)
    {
        return $this->request(
            'POST',
            'ic/pickpackshiporder/advancedinfosearch',
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
    public function pickPackShipOrderGetOrdersByNumber(array $request)
    {
        return $this->request(
            'POST',
            'ic/pickpackshiporder/getordersbynumber',
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
    public function pickPackShipOrderDeleteOrdersByNumber(array $request)
    {
        return $this->request(
            'POST',
            'ApiItemPurchaseOrder',
            $request
        );
    }
}
