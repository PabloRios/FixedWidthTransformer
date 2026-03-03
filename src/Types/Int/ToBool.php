<?php

namespace PabloRios\FixedWidthTransformer\Types\Int;

class ToBool implements IIntType
{
    public function transform(Int $int): Bool
    {
        return boolval($int);
    }
}
