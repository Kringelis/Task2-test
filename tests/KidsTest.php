<?php

use App\Kids;

test("should reverses all the words in a sentence that start with a particular letter", function () {
    expect(Kids::reverse("First nam to walk on the noom", "n"))->toEqual("First man to walk on the moon");
    expect(Kids::reverse("reteP ate reppep", "r"))->toEqual("Peter ate pepper");
    expect(Kids::reverse("I dekcip delkcip onions for supper", "d"))->toEqual("I picked pickled onions for supper");
});