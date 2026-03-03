<?php

namespace PabloRios\FixedWidthTransformer\Types\String;

class StringToString implements IStringType
{
    public function transform(String $string): String
    {
        return trim($string, " \t\n\r\0\x0B");
    }
}
