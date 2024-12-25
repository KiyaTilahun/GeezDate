<?php

use GeezDate\GeezDate\Facades\GeezDate;

it('converts a valid date to Geez format', function () {


    $date = '2024-12-25';
    $expectedResult = GeezDate::changeNumber(2024) . '-' . GeezDate::changeNumber(12) . '-' . GeezDate::changeNumber(25);

    $geezDate = GeezDate::changeDatetoGeez($date);

    expect($geezDate)->toBe($expectedResult);
});
