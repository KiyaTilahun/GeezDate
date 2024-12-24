<?php

use GeezDate\GeezDate\Facades\GeezDate;

it('can test', function () {
    dd(GeezDate::hello(934567891));
    expect(true)->toBeTrue();
});
