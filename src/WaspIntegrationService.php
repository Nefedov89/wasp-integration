<?php

declare(strict_types = 1);

namespace Nefedov89\WaspIntegration;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Nefedov89\WaspIntegration\Traits\ApiItemsTrait;
use function json_decode;

/**
 * Class WaspIntegrationService
 *
 * @package Nefedov89\WaspIntegration
 */
class WaspIntegrationService
{
    use ApiItemsTrait;

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
                'Accept'        => 'application/json',
                'Authorization' => "Bearer {$this->accessToken}",
            ],
        ];

        if ($payload !== null) {
            $params['form_params'] = $payload;
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
