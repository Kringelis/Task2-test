<?php
use App\Clock;
test("should convert seconds to a time string in format hh:mm:ss", function()  {
    expect(Clock::timeWillTell(5025))->toEqual("01:23:45");
    expect(Clock::timeWillTell(61201))->toEqual("17:00:01");
    expect(Clock::timeWillTell(87000))->toEqual("00:10:00");
});