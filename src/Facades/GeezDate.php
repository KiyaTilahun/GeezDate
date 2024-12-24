<?php

namespace GeezDate\GeezDate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string hello() This is the correct method annotation
 * @see \GeezDate\GeezDate\GeezDate
 */
class GeezDate extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \GeezDate\GeezDate\GeezDate::class;
    }
}
