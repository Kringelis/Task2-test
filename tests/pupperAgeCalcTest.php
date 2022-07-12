<?php

use App\pupperAge;

test("should return dog's age in dog years", function () {

    expect(pupperAge::pupperPrinter(1))->toEqual("Your doggie is 7 years old in dog years!");
    expect(pupperAge::pupperPrinter(10))->toEqual("Your doggie is 70 years old in dog years!");
    expect(pupperAge::pupperPrinter(15))->toEqual("Your doggie is 105 years old in dog years!");
});