<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp(): void
    {
        parent::setUp();
    
        config([
            'database.connections.pgsql.database' => 'laravel_test',
        ]);
    
        // Outras configurações necessárias
    }
}
