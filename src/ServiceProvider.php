<?php

declare(strict_types = 1);

namespace Nefedov89\WaspIntegration;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Class ServiceProvider
 *
 * @package Nefedov89\WaspIntegration
 */
class ServiceProvider extends BaseServiceProvider
{
    /** @var string */
    protected $configName;

    /** @var string */
    protected $configPathVendor;

    /** @var string */
    protected $configPathClient;

    public function __construct(Application $app) {
        parent::__construct($app);

        $this->configName = 'wasp-integration';
        $this->configPathVendor = __DIR__."/../config/{$this->configName}.php";
        $this->configPathClient = $this->configPath().DIRECTORY_SEPARATOR."{$this->configName}.php";
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            $this->configPathVendor => $this->configPathClient,
        ]);

        $this->mergeConfigFrom(
            $this->configPathVendor,
            $this->configName
        );
    }

    public function register(): void
    {
        $this->app->bind(WaspIntegrationService::class, function ($app) {
            return new WaspIntegrationService(
                Config::get("{$this->configName}.user_access_token"),
                Config::get("{$this->configName}.base_uri")
            );
        });
    }

    /**
     * @return string
     */
    protected function configPath(): string
    {
        if (method_exists($this->app, 'configPath')) {
            return $this->app->configPath();
        }

        return function_exists('config_path')
            ? config_path()
            : $this->app->basePath().DIRECTORY_SEPARATOR.'config';
    }
}
