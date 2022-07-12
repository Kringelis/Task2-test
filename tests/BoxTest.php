<?php

use App\Box;

test("should return sum of volumes of all boxes", function () {
    expect(Box::boxVolume([[4, 2, 4], [3, 3, 3], [1, 1, 2], [2, 1, 1]]))->toEqual(63);
    expect(Box::boxVolume([[2, 2, 2], [2, 1, 1]]))->toEqual(10);
    expect(Box::boxVolume([[1, 1, 1]]))->toEqual(1);
});