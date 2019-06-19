<?php

declare(strict_types = 1);

namespace Nefedov89\WaspIntegration\Traits;

/**
 * Trait ApiItemsTrait
 */
trait ApiItemsTrait
{
    /**
     * @param array $request
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function itemCreateInventoryItems(array $request)
    {
        return $this->request(
            'POST',
            'ic/item/createInventoryItems',
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
    public function itemUpdateInventoryItems(array $request)
    {
        return $this->request(
            'POST',
            'ic/item/updateInventoryItems',
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
    public function itemCreateNonInventoryItems(array $request)
    {
        return $this->request(
            'POST',
            'ic/item/createNonInventoryItems',
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
    public function itemUpdateNonInventoryItems(array $request)
    {
        return $this->request(
            'POST',
            'ic/item/updateNonInventoryItems',
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
    public function itemCreateServiceItems(array $request)
    {
        return $this->request(
            'POST',
            'ic/item/createServiceItems',
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
    public function itemUpdateServiceItems(array $request)
    {
        return $this->request(
            'POST',
            'ic/item/updateServiceItems',
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
    public function itemGetItemsByNumber(array $request)
    {
        return $this->request(
            'POST',
            'ic/item/getitemsbynumber',
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
    public function itemInfoSearch(array $request)
    {
        return $this->request(
            'POST',
            'ic/item/infosearch',
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
    public function itemAdvancedInfoSearch(array $request)
    {
        return $this->request(
            'POST',
            'ic/item/advancedinfosearch',
            $request
        );
    }

    /**
     * @param array $request
     * @param string $itemNumber
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function itemGetInventoryItem(array $request, string $itemNumber)
    {
        return $this->request(
            'POST',
            "ic/item/getinventoryitem/{$itemNumber}",
            $request
        );
    }

    /**
     * @param array $request
     * @param string $itemNumber
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function itemGetNonInventoryItem(array $request, string $itemNumber)
    {
        return $this->request(
            'POST',
            "ic/item/getnoninventoryitem/{$itemNumber}",
            $request
        );
    }

    /**
     * @param array $request
     * @param string $itemNumber
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function itemGetServiceItem(array $request, string $itemNumber)
    {
        return $this->request(
            'POST',
            "ic/item/getserviceitem/{$itemNumber}",
            $request
        );
    }

    /**
     * @param array $request
     * @param string $itemNumber
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function itemGetAssemblyItem(array $request, string $itemNumber)
    {
        return $this->request(
            'POST',
            "ic/item/getassemblyitem/{$itemNumber}",
            $request
        );
    }

    /**
     * @param array $request
     * @param string $itemNumber
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function itemGetKitItem(array $request, string $itemNumber)
    {
        return $this->request(
            'POST',
            "ic/item/getkititem/{$itemNumber}",
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
    public function itemInventorySearch(array $request)
    {
        return $this->request(
            'POST',
            'ic/item/inventorysearch',
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
    public function itemAdvancedInventorySearch(array $request)
    {
        return $this->request(
            'POST',
            'ic/item/advancedinventorysearch',
            $request
        );
    }
}
