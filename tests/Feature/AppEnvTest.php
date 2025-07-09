<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\App;

class AppEnvTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testAppEnv(): void
    {
        if (App::environment("testting")){
            self::assertTrue(True        );
        }

    }
}
