<?php

declare(strict_types=1);

/**
 * Web Routes
 *
 * Define your application routes here.
 */

use Toporia\Framework\Support\Accessors\Route;
use App\Presentation\Http\Controllers\WelcomeController;

// Welcome Page
Route::get('/', [WelcomeController::class, 'index']);

// Add your web routes below
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/contact', [PageController::class, 'contact']);
