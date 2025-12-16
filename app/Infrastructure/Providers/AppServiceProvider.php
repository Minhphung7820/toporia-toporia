<?php

declare(strict_types=1);

namespace App\Infrastructure\Providers;

use Toporia\Framework\Container\Contracts\ContainerInterface;
use Toporia\Framework\Foundation\ServiceProvider;
use Toporia\Framework\RateLimit\{RateLimiter, Limit};
use Toporia\Framework\Http\Request;

/**
 * Application Service Provider
 *
 * Register core application-level services here.
 *
 * Keep this provider focused on application business logic services.
 * Framework-level services (Auth, Events, etc.) should be in Framework providers.
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(ContainerInterface $container): void
    {
        // NOTE: UserRepository and UserProvider are now registered in DomainServiceProvider
        // This eliminates inter-provider dependency issues

        // Register your application services here
        // Example:
        // $container->singleton(YourServiceInterface::class, YourServiceImplementation::class);
    }

    /**
     * {@inheritdoc}
     *
     * Boot application services.
     * Register named rate limiters here (similar to other frameworks).
     */
    public function boot(ContainerInterface $container): void
    {
        // Set RateLimiter instance for named limiters
        $limiter = $container->get(\Toporia\Framework\RateLimit\Contracts\RateLimiterInterface::class);
        RateLimiter::setLimiter($limiter);

        // Register named rate limiters
        // Example: API rate limit per user (100 requests per minute)
        RateLimiter::for('api-per-user', function (Request $request) {
            return Limit::perMinute(100)->by(
                $request->user()?->getId() ?? $request->ip()
            );
        });

        // Example: API rate limit (20 requests per 2 minutes)
        RateLimiter::for('api', function (Request $request) {
            return Limit::per(20, 120)->by($request->ip()); // 20 requests per 120 seconds (2 minutes)
        });

        // Example: Strict rate limit for sensitive endpoints
        RateLimiter::for('strict', function (Request $request) {
            return Limit::perMinute(10)->by($request->ip());
        });

        // Example: High-volume rate limit (1000 requests per hour)
        RateLimiter::for('high-volume', function (Request $request) {
            return Limit::perHour(1000)->by(
                $request->user()?->getId() ?? $request->ip()
            );
        });
    }
}
