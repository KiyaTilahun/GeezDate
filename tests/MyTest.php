<?php

use GeezDate\GeezDate\Facades\GeezDate;

it('can test', function () {
    dd(GeezDate::hello(25000));
    expect(true)->toBeTrue();
});
