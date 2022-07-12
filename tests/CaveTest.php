<?php

use App\Cave;

test("should return the given text repeated n times", function () {
    expect(Cave::echoes("ab", 3))->toEqual("ababab");
    expect(Cave::echoes("kiwi", 1))->toEqual("kiwi");
    expect(Cave::echoes("cherry", 2))->toEqual("cherrycherry");
});