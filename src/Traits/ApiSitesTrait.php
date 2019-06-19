<?php

declare(strict_types = 1);

namespace Nefedov89\WaspIntegration\Traits;

/**
 * Trait ApiSitesTrait
 *
 * @package Nefedov89\WaspIntegration\Traits
 */
trait ApiSitesTrait
{
    /**
     * @param array $request
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function sitesCreate(array $request)
    {
        return $this->request(
            'POST',
            'sites/create',
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
    public function sitesUpdate(array $request)
    {
        return $this->request(
            'POST',
            'sites/update',
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
    public function sitesSearchExact(array $request)
    {
        return $this->request(
            'POST',
            'sites/search/exact',
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
    public function sitesGetSitesByName(array $request)
    {
        return $this->request(
            'POST',
            'sites/getsitesbyname',
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
    public function sitesInfoSearch(array $request)
    {
        return $this->request(
            'POST',
            'sites/infosearch',
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
    public function sitesAdvancedInfoSearch(array $request)
    {
        return $this->request(
            'POST',
            'sites/advancedinfosearch',
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
    public function sitesDeleteSitesByNumber(array $request)
    {
        return $this->request(
            'POST',
            'sites/deletesitesbynumber',
            $request
        );
    }
}
