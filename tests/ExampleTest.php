<?php

namespace Tailonperin\LaravelUtalkApi\Tests;

use Orchestra\Testbench\TestCase;
use Tailonperin\LaravelUtalkApi\LaravelUtalkApiServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelUtalkApiServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
