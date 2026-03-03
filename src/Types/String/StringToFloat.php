<?php

namespace PabloRios\FixedWidthTransformer\Types\String;

class StringToFloat implements IStringType
{
    public static function transform(String $string, Int $decimal = 2): Float
    {
        $data = floatval($string);
        //$data = number_format($data, $decimal, '.', '');

        return $data;
    }
}
