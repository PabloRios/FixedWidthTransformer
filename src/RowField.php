<?php

namespace PabloRios\FixedWidthTransformer;

use PabloRios\FixedWidthTransformer\Types\IType;
use PabloRios\FixedWidthTransformer\Types\String\StringToString;

class RowField
{
    private $name;
    private $position;
    private $length;
    private $transformer;
    private $rawData;

    public function __construct(String $name, Int $length, Int $position = null, $transformer = new StringToString())
    {
        $this->name = $name;
        $this->position = $position;
        $this->length = $length;
        $this->transformer = $transformer;
    }

    public function getFormatedData()
    {
        return $this->transformer->transform($this->getRawData());
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     * @return  self
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get the value of length
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set the value of length
     *
     * @return  self
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get the value of transformer
     */
    public function getTransformer()
    {
        return $this->transformer;
    }

    /**
     * Set the value of transformer
     *
     * @return  self
     */
    public function setTransformer($transformer)
    {
        $this->transformer = $transformer;

        return $this;
    }

    /**
     * Get the value of rawData
     */
    public function getRawData()
    {
        return $this->rawData;
    }

    /**
     * Set the value of rawData
     *
     * @return  self
     */
    public function setRawData($rawData)
    {
        $this->rawData = $rawData;

        return $this;
    }
}
