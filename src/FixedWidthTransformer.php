<?php

namespace PabloRios\FixedWidthTransformer;

class FixedWidthTransformer implements \Iterator, \Countable
{
    protected int $position = 0;
    protected array $input;
    protected object $class;
    protected Row $definition;
    protected ?int $lineLength = null;
    protected bool $useEncapsulation;

    public function __construct(array $input, Object $class, $useEncapsulation = True)
    {
        if (!array_is_list($input)) {
            throw new \Exception("input must be array list", 1);
        }
        $this->input = $input;
        $this->class = $class;
        $this->useEncapsulation = $useEncapsulation;
    }

    public function setDefinition($definition)
    {
        $this->definition = $definition;
    }

    protected function makeRow($row)
    {
        $class = new $this->class();
        $offset = 0;
        foreach ($this->definition->getfields() as $field) {
            $field->setRawData(substr($row, $field->getPosition(), $field->getLength()));
            if ($this->useEncapsulation) {
                $method = "set" . $field->getName();
                $class->$method($field->getFormatData());
            } else {
                $property = $field->getName();
                $class->$property = $field->getFormatData();
            }
        }
        return $class;
    }

    public function current(): object
    {
        return $this->makeRow($this->input[$this->position]);
    }

    public function count(): int
    {
        return count($this->input);
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return isset($this->input[$this->position]);
    }
}
