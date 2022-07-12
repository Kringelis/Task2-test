<?php

use App\Family;

test("should return the sum of people's budgets", function () {
    expect(Family::calc(["John", 21, 23000], ["Steve", 32, 40000], ["Martin", 16, 2700]))->toEqual(65700);
    expect(Family::calc(["John", 21, 29000], ["Steve", 32, 32000], ["Martin", 16, 1600]))->toEqual(62600);
    expect(Family::calc(["Chloe", 12, 0], ["Emily", 68, 1200], ["Bob", 70, 1200]))->toEqual(2400);
});