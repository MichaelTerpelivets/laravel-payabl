<?php

namespace PayablAPI\Response;


use PayablAPI\Exception\MappingException;

abstract class AbstractResponse
{
    private $data;

    /**
     * @param $dataArray
     * @throws MappingException
     */
    public function __construct($dataArray = null)
    {
        if (is_array($dataArray)) {
            $this->data = $dataArray;
        } elseif ($dataArray !== null) {
            throw new MappingException('Constructor parameter must be an array');
        }
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
     * @return array
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * @param $field
     * @param string $className
     * @return mixed|null
     */
    public function getObject($field, string $className = self::class)
    {
        if (!array_key_exists($field, $this->data)) {
            return null;
        }
        return new $className($this->get($field));
    }

    /**
     * @param $field
     * @param string $className
     * @return array
     */
    public function getObjectList($field, string $className = self::class): array
    {
        if (!isset($this->data[$field])) {
            return [];
        }
        $list = [];
        foreach ($this->data[$field] as $value) {
            $list[] = new $className($value);
        }
        return $list;
    }
}