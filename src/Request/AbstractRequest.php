<?php

namespace PayablAPI\Request;

use PayablAPI\Exception\MappingException;

abstract class AbstractRequest
{
    private $data = [];

    /**
     * @param array|null $paramArray
     * @throws MappingException
     */
    public function __construct(array $paramArray = null)
    {
        if (is_array($paramArray)) {
            $this->data = $paramArray;
        } elseif ($paramArray !== null) {
            throw new MappingException('Constructor params must be array!');
        }
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $array = $this->data;
        foreach ($array as $key => $value) {
            if ($value instanceof self) {
                $array[$key] = $value->toArray();
            }
        }
        return $array;
    }

    /**
     * @param $field
     * @return mixed|null
     */
    public function get($field)
    {
        return $this->data[$field] ?? null;
    }

    /**
     * @param $field
     * @param $value
     * @return $this
     */
    public function set($field, $value): AbstractRequest
    {
        if ($value instanceof self) {
            $value = $value->toArray();
        }
        if ($value === null) {
            unset($this->data[$field]);
            return $this;
        }
        $this->data[$field] = $value;
        return $this;
    }

    /**
     * @param $field
     * @param $className
     * @return mixed|null
     */
    public function getObject($field, $className)
    {
        if (!array_key_exists($field, $this->data)) {
            return null;
        }
        $object = new $className;
        $object->data = &$this->data[$field];
        return $object;
    }
}