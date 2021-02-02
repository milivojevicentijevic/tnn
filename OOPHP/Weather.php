<?php
class Weather
{
    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celsiusToFarenheit($c) {
        return $c * 9 / 5 + 32;
    }
    public static function determinTempCondition($f) {
        if ($f < 40) {
            return self::$tempConditions[0];
        } elseif ($f < 70) {
            return self::$tempConditions[1];
        } else {
            return self::$tempConditions[2];
        }
    }
}