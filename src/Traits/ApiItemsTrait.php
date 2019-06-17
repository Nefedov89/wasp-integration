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
    public function itemInfoSearch(array $request)
    {
        return $this->request(
            'POST',
            'ic/item/infosearch',
            $request
        );
    }

}
