<?php

declare(strict_types=1);

namespace App\Infrastructure\Providers;

use Toporia\Framework\Container\Contracts\ContainerInterface;
use Toporia\Framework\Foundation\ServiceProvider;

/**
 * Application Service Provider
 *
 * Register core application-level services here.
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(ContainerInterface $container): void
    {
        // Register your application services here
    }

    /**
     * {@inheritdoc}
     */
    public function boot(ContainerInterface $container): void
    {
        // Boot application services here
    }
}
