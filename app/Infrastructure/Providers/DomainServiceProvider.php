<?php

declare(strict_types=1);

namespace App\Infrastructure\Providers;

use Toporia\Framework\Container\Contracts\ContainerInterface;
use Toporia\Framework\Foundation\ServiceProvider;

/**
 * Domain Service Provider
 *
 * Register domain-level services here.
 * This provider is for business logic services.
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(ContainerInterface $container): void
    {
        // Register your domain services here
        // Example:
        // $container->singleton(UserRepository::class, PdoUserRepository::class);
    }

    /**
     * {@inheritdoc}
     */
    public function boot(ContainerInterface $container): void
    {
        // Boot logic here if needed
    }
}
