<?php
use App\price;
test("should return the final price after the discount", function(){
    expect(price::discount(1500, 50))->toEqual(750);
    expect(price::discount(89, 20))->toEqual(71.2);
    expect(price::discount(100, 75))->toEqual(25);
});