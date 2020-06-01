<?php

namespace Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp() : void
    {
        parent::setUp();

        $this->artisan('migrate', [
            '--database' => config('wink.database_connection'),
            '--path' => 'vendor/themsaid/wink/src/Migrations',
            '--force' => true,
        ]);
    }

    use CreatesApplication, RefreshDatabase, DatabaseMigrations;
}
