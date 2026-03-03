<?php

namespace PabloRios\FixedWidthTransformer\Types\String;

class StringToInt implements IStringType
{
    public static function transform(String $string): Int
    {
        return intval($string);
    }
}
