<?php
use App\Lovers;
test("should return a new array of arrays with couples, if given array sizes match and 'Cupid is on vacation' if not ", function() {
    expect(Lovers::cupid(["Elise", "Mary"], ["John", "Rick"]))->toEqual([["Elise", "John"], ["Mary", "Rick"]]);
    expect(Lovers::cupid(["Ana", "Amy", "Lisa"], ["Bob", "Josh"]))->toEqual("Cupid is on vacation");
    expect(Lovers::cupid(["Ana", "Amy", "Lisa"], ["Bob", "Josh", "Tim"]))->toEqual([["Ana", "Bob"], ["Amy", "Josh"],["Lisa", "Tim"]]);
});