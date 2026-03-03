<?php

namespace PabloRios\FixedWidthTransformer\Types\String;

class StringToDateTime implements IStringType
{
    public function __construct(
        protected string $format = 'dmY'
        ) {}

    public function transform(String $string): \DateTime|bool
    {
        $datetime = \DateTime::createFromFormat($this->format, $string);

        return $datetime;
    }
}
