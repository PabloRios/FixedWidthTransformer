<?php

namespace PabloRios\FixedWidthTransformer\Types\String;

class StringToNull implements IStringType
{
    public function transform(String $string): null
    {
        return null;
    }
}
