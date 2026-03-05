<?php

namespace Core;

class Validator
{
    public static function string($value, $min = 1, $max = INF){

        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;

    }

    public static function email($value) {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
//    in bool
//    public static function email($value):bool {
//        return filter_var($value, FILTER_VALIDATE_EMAIL);
//    }
//    or
//    public static function email($value) {
//        return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
//    }
//      input type
//    public static function email(string $value) {
//        return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
//    }

    public static function greaterThan(int $value, int $value2):bool {
        return $value > $value2;
    }

}
