<?php

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function password($value, $min = 8, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    public static function confirm($confValue, $password, $min = 8, $max = INF)
    {
        $confValue = trim($confValue);
        $password = trim($password);
        return $confValue === $password && (strlen($confValue) >= 8 && strlen($confValue) <= INF);
    }
}
