<?php

declare(strict_types = 1);

namespace Nefedov89\WaspIntegration;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Nefedov89\WaspIntegration\Traits\ApiAttachmentsTrait;
use Nefedov89\WaspIntegration\Traits\ApiCustomerTrait;
use Nefedov89\WaspIntegration\Traits\ApiItemPickPackShipOrderTrait;
use Nefedov89\WaspIntegration\Traits\ApiItemPurchaseOrderTrait;
use Nefedov89\WaspIntegration\Traits\ApiItemsTrait;
use Nefedov89\WaspIntegration\Traits\ApiLocationsTrait;
use Nefedov89\WaspIntegration\Traits\ApiSalesTaxCodeTrait;
use Nefedov89\WaspIntegration\Traits\ApiSitesTrait;
use Nefedov89\WaspIntegration\Traits\ApiTransactionsTrait;
use function json_encode, json_decode;

/**
 * Class WaspIntegrationService
 *
 * @package Nefedov89\WaspIntegration
 */
class WaspIntegrationService
{
    use ApiAttachmentsTrait,
        ApiCustomerTrait,
        ApiItemPickPackShipOrderTrait,
        ApiItemPurchaseOrderTrait,
        ApiItemsTrait,
        ApiLocationsTrait,
        ApiSalesTaxCodeTrait,
        ApiSitesTrait,
        ApiTransactionsTrait;

    /** @var Client */
    protected $httpClient;

    /**
     * @var string
     */
    protected $accessToken;

    /**
     * WaspIntegrationService constructor.
     *
     * @param string $accessToken
     * @param string $baseUri
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(string $accessToken, string $baseUri)
    {
        $this->httpClient = new Client([
            'base_uri' => $baseUri,
        ]);
        $this->accessToken = $accessToken;
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array|null $payload
     *
     * @return array
     *
     * @throws \RuntimeException
     */
    protected function request(
        string $method,
        string $uri,
        array $payload = null
    ): array {
        $params = [
            'headers' => [
                'Content-Type'  => 'application/json',
                'Authorization' => "Bearer {$this->accessToken}",
            ],
        ];

        if ($payload !== null) {
            $params['body'] = json_encode($payload);
        }

        try {
            $response = $this->httpClient->request($method, $uri, $params);

            return [
                'code'   => $response->getStatusCode(),
                'status' => "{$response->getStatusCode()} {$response->getReasonPhrase()}",
                'data'   => $response->getStatusCode() === 200
                    ? json_decode(
                        (string) $response->getBody()->getContents(),
                        true
                    )
                    : [],
            ];
        } catch (ClientException $e) {
            return [
                'code'  => $e->getCode(),
                'error' => $e->getResponse()->getBody()->getContents(),
            ];
        }
    }
}
