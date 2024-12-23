<?php

namespace GeezDate\GeezDate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GeezDate\GeezDate\GeezDate
 */
class GeezDate extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \GeezDate\GeezDate\GeezDate::class;
    }
}
