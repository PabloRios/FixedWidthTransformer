<?php

namespace PabloRios\FixedWidthTransformer\Types\String;

class StringToBool implements IStringType
{
    public function transform(String $string): Bool
    {
        $data = boolval($string);

        return $data;
    }
}
