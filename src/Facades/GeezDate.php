<?php

namespace GeezDate\GeezDate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string changeDatetoGeez(string $date)
 * @method static string changeNumber(string $number)
 *
 * @see \GeezDate\GeezDate\GeezDate
 */
class GeezDate extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \GeezDate\GeezDate\GeezDate::class;
    }
}
