<?php

use Nabinem\PhpPackage\Weight;

it('can convert kilograms to pounds', function () {
    $pounds = Weight::kilograms(100)->toPounds();
    expect($pounds)->toBe(220.46);
});
