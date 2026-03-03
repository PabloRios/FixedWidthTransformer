<?php

namespace PabloRios\FixedWidthTransformer;

class Row
{
    /**
     * Row attributes.
     *
     * @var array
     */
    protected $fields;

    protected $length = 0;

    /**
     * Create a new Row instance.
     */
    public function __construct($fields)
    {
        $this->fields = $fields;
    }

    /**
     * Get row attributes.
     *
     * @return  array
     */
    public function getFields()
    {
        return $this->fields;
    }

    public function getLength(){
        if ($this->length == 0) {
            $this->calculateLength();
        }
        return $this->length;
    }

    protected function calculateLength()
    {
        foreach ($this->getfields() as $field) {
            $this->length += $field->getLength();
        }
    }
}
