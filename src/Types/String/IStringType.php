<?php

namespace PabloRios\FixedWidthTransformer\Types\String;

use PabloRios\FixedWidthTransformer\Types\IType;

interface IStringType extends IType
{
    public static function transform(String $string): Mixed;
}
