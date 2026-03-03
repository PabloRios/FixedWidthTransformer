<?php

namespace PabloRios\FixedWidthTransformer\Types\String;

class StringToFloat implements IStringType
{
    public function transform(String $string, Int $decimal = 2): Float
    {
        $data = floatval($string);

        return $data;
    }
}
