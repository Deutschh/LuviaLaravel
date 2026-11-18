<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Boot tests from the distributable example configuration so the suite
     * remains independent from a local, untracked .env file.
     */
    public function createApplication(): Application
    {
        $app = require __DIR__.'/../bootstrap/app.php';
        $app->loadEnvironmentFrom('.env.example');
        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
