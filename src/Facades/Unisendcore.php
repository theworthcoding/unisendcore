<?php

namespace Theworthcoding\Unisendcore\Facades;

use Illuminate\Support\Facades\Facade;

class Unisendcore extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'unisendcore';
    }
}
