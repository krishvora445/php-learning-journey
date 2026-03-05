<?php
use Core\Validator;

it("validate string", function () {
    expect(Validator::string('foodbar'))->toBeTrue();
    expect(Validator::string(False))->toBeFalse();
    expect(Validator::string(''))->toBeFalse();
});

it("validate string with min num of 8", function () {
    expect(Validator::string('sdknsdc', 8))->toBeFalse();

});
it("validate an email with min num of 8", function () {
    expect(Validator::email('Vora76637@gmail.com'))->toBe("Vora76637@gmail.com");
    expect(Validator::email('Vora76637gmail.com'))->toBeFalse();

});

it("validate is greater then a given amount", function () {
    expect(Validator::greaterThan(10,1))->toBeTrue();
    expect(Validator::greaterThan(10,100))->toBeFalse();
})->only();