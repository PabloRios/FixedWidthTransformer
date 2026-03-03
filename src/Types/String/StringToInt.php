<?php

namespace PabloRios\FixedWidthTransformer\Types\String;

class StringToInt implements IStringType
{
    public function transform(String $string): Int
    {
        return intval($string);
    }
}
