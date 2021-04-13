<?php

namespace Tailonperin\LaravelUtalkApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tailonperin\LaravelUtalkApi\Skeleton\SkeletonClass
 */
class LaravelUtalkApiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-utalk-api';
    }
}
