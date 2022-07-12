<?php
use App\hideAndSeek;
test("should return all lowercase letters", function() {

    expect(hideAndSeek::hideAndSeek("UcUNFYGaFYFYGtNUH"))->toEqual("cat");
    expect(hideAndSeek::hideAndSeek("bEEFGBuFBRrHgUHlNFYaYr"))->toEqual("burglar");
    expect(hideAndSeek::hideAndSeek("YFpHUFBrFBYFBYLGBYoEFGBMENT"))->toEqual("pro");
});