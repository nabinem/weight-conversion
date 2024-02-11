<?php

use Nabinem\PhpPackage\Weight;

it('can convert kilograms to pounds correctly!', function () {
    $pounds = Weight::kilograms(100)->toPounds();
    expect($pounds)->toBe(230.46);
});
