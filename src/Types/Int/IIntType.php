<?php

namespace PabloRios\FixedWidthTransformer\Types\Int;

use PabloRios\FixedWidthTransformer\Types\IType;

interface IIntType extends IType
{
    public static function transform(Int $int): Mixed;
}
