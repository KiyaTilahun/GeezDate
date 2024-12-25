<?php

use GeezDate\GeezDate\Facades\GeezDate;

it('converts a valid date to Geez format', function () {

    $gregorianDate = '2024-12-25';
    $ethiopianDate = GeezDate::convertToEthiopianDate($gregorianDate);
    dd($ethiopianDate);
    $date = '2024-13-25';
    $expectedResult = GeezDate::changeNumber('2024') . ' ' . GeezDate::changeNumber('12') . ' ' . GeezDate::changeNumber('25');

    $geezDate = GeezDate::changeDatetoGeez($date);
    dd($expectedResult);

    expect($geezDate)->toBe($expectedResult);
});
