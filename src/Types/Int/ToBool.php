<?php

namespace PabloRios\FixedWidthTransformer\Types\Int;

class ToBool implements IIntType
{
    public static function transform(Int $int): Bool
    {
        return boolval($int);
    }
}
