<?php

declare(strict_types=1);

/**
 * API Routes
 *
 * These routes are loaded by RouteServiceProvider within the 'api' middleware group.
 * All routes here are automatically prefixed with '/api'.
 * All routes receive the middleware from the 'api' group in config/middleware.php.
 */

use Toporia\Framework\Support\Accessors\Route;
use Toporia\Framework\Http\Request;
use App\Presentation\Http\Controllers\Api\CsrfCookieController;

// CSRF Cookie endpoint for SPA authentication (must be called before login/register)
Route::get('/csrf-cookie', CsrfCookieController::class);

// =========================================================================
// AUTHENTICATION ROUTES
// =========================================================================
// Uncomment and create AuthController to enable authentication
//
// use App\Presentation\Http\Controllers\Api\AuthController;
// Route::post('/auth/register', [AuthController::class, 'register']);
// Route::post('/auth/login', [AuthController::class, 'login']);
// Route::get('/auth/user', [AuthController::class, 'user']);
// Route::post('/auth/logout', [AuthController::class, 'logout']);
// Route::post('/auth/refresh', [AuthController::class, 'refresh']);
// Route::post('/auth/forgot-password', [AuthController::class, 'forgotPassword']);
// Route::post('/auth/reset-password', [AuthController::class, 'resetPassword']);
// Route::post('/auth/change-password', [AuthController::class, 'changePassword']);

// =========================================================================
// BROADCASTING AUTH ROUTES
// =========================================================================

use Toporia\Framework\Realtime\Auth\BroadcastAuthController;

// Internal endpoint for realtime server to verify session auth
Route::post('/broadcasting/verify-session', [BroadcastAuthController::class, 'verifySession']);

// =========================================================================
// YOUR API ROUTES HERE
// =========================================================================

// Example:
// Route::get('/users', [UserController::class, 'index']);
// Route::get('/users/{id}', [UserController::class, 'show']);
// Route::post('/users', [UserController::class, 'store']);
// Route::put('/users/{id}', [UserController::class, 'update']);
// Route::delete('/users/{id}', [UserController::class, 'destroy']);

// =========================================================================
// FALLBACK ROUTE
// =========================================================================

// 404 Handler - Global handler for unmatched routes
Route::fallback(function () {
    abort(404);
});
