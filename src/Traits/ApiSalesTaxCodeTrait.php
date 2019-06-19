<?php

declare(strict_types = 1);

namespace Nefedov89\WaspIntegration\Traits;

/**
 * Trait ApiSalesTaxCodeTrait
 *
 * @package Nefedov89\WaspIntegration\Traits
 */
trait ApiSalesTaxCodeTrait
{
    /**
     * @param array $request
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function salesTaxCodeSaveSalesTaxCode(array $request)
    {
        return $this->request(
            'POST',
            'ic/salestaxcode/SaveSalesTaxCode',
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
    public function salesTaxCodeRetrieveSalesTaxCodesByNames(array $request)
    {
        return $this->request(
            'POST',
            'ic/salestaxcode/RetrieveSalesTaxCodesByNames',
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
    public function salesTaxCodeDeleteSalesTaxCodesByNames(array $request)
    {
        return $this->request(
            'POST',
            'ic/salestaxcode/DeleteSalesTaxCodesByNames',
            $request
        );
    }

    /**
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function salesTaxCodeTaxCodeSearchGetAll()
    {
        return $this->request(
            'GET',
            'ic/salestaxcode/TaxCodeSearchGetAll'
        );
    }

    /**
     * @param array $request
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function salesTaxCodeTaxCodeSearch(array $request)
    {
        return $this->request(
            'POST',
            'ic/salestaxcode/TaxCodeSearch',
            $request
        );
    }
}
