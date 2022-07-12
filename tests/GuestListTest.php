<?php
use App\GuestList;

test("should remove duplicate values from array", function() {
    expect(GuestList::doubleTrouble(["John", "Taylor", "John"]))->toEqual(["John", "Taylor"]);
    expect(GuestList::doubleTrouble(["Ann", "Ann", "Ann"]))->toEqual(["Ann"]);
    expect(GuestList::doubleTrouble(["John", "Taylor"]))->toEqual(["John", "Taylor"]);
});