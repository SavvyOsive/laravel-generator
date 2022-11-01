<?php

namespace LaravelGenerator\Generator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelGenerator\Generator\Generator
 */
class Generator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LaravelGenerator\Generator\Generator::class;
    }
}
