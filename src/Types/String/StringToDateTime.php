<?php

namespace PabloRios\FixedWidthTransformer\Types\String;

class StringToDateTime implements IStringType
{
    const DATEFORMAT = 'dmY';

    public static function transform(String $string, String $format = self::DATEFORMAT): \DateTime
    {
        return \DateTime::createFromFormat($format, $string);
    }
}
