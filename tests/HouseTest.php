<?php

use App\House;

test("should return the total value of stolen items", function () {
    expect(House::burgular(['TV', '30', 'skate', '20', 'stereo', '50']))->toEqual(100);
    expect(House::burgular(['painting', '20000']))->toEqual(20000);
    expect(House::burgular(['ring', '250', 'neclace', '500']))->toEqual(750);
});
test("should return a string 'Lucky you!', if nothing was stolen", function() {
    expect(House::burgular(''))->toEqual("Lucky you!");
    });