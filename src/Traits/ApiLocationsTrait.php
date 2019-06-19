<?php

declare(strict_types = 1);

namespace Nefedov89\WaspIntegration\Traits;

/**
 * Trait ApiLocationsTrait
 *
 * @package Nefedov89\WaspIntegration\Traits
 */
trait ApiLocationsTrait
{
    /**
     * @param array $request
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function locationsCreate(array $request)
    {
        return $this->request(
            'POST',
            'locations/create',
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
    public function locationsUpdate(array $request)
    {
        return $this->request(
            'POST',
            'locations/update',
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
    public function locationsSearchExact(array $request)
    {
        return $this->request(
            'POST',
            'locations/search/exact',
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
    public function locationsAdvancedInfoSearch(array $request)
    {
        return $this->request(
            'POST',
            'locations/advancedinfosearch',
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
    public function locationsGetLocationsByCode(array $request)
    {
        return $this->request(
            'POST',
            'locations/getlocationsbycode',
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
    public function locationsInfoSearch(array $request)
    {
        return $this->request(
            'POST',
            'locations/infosearch',
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
    public function locationsDeleteLocationsByCode(array $request)
    {
        return $this->request(
            'POST',
            'locations/deletelocationsbycode',
            $request
        );
    }
}
