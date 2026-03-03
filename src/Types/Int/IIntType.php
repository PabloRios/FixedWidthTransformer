<?php

namespace PabloRios\FixedWidthTransformer\Types\Int;

use PabloRios\FixedWidthTransformer\Types\IType;

interface IIntType extends IType
{
    public function transform(Int $int): Mixed;
}
