<?php

declare(strict_types=1);

namespace App\Presentation\Http\Controllers;

/**
 * Welcome Controller
 *
 * Displays the welcome page for the application.
 */
final class WelcomeController extends BaseController
{
    /**
     * Display the welcome page.
     *
     * @return string
     */
    public function index(): string
    {
        return $this->view('welcome');
    }
}
