<?php
use App\secretSociety;
test("should return a string of first letters from array items", function () {

    expect(secretSociety::secretSociety(["Adam", "Sarah", "Malcolm"]))->toEqual("AMS");
    expect(secretSociety::secretSociety(["Harry", "Newt", "Luna", "Cho"]))->toEqual("CHLN");
    expect(secretSociety::secretSociety(["Phoebe", "Chandler", "Rachel", "Ross", "Monica", "Joey"]))->toEqual("CJMPRR");
});