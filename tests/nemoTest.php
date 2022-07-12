<?php
use App\Sea;

test("should return a string 'I found Nemo at X!', X being the index value of the word 'Nemo', if 'Nemo' is found", function ()  {
    expect(Sea::findingNemo("I am finding Nemo !"))->toEqual("I found Nemo at 3!");
    expect(Sea::findingNemo("Nemo is me"))->toEqual("I found Nemo at 0!");
    expect(Sea::findingNemo("I Nemo am"))->toEqual("I found Nemo at 1!");
});
    test("should return a string 'I can't find Nemo :(', if 'Nemo' is not found", function() {
    expect(Sea::findingNemo("I am searching"))->toEqual("I can't find Nemo :(");
});