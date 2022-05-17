<?php

namespace Engine\Container;

class Container
{
    private $definitions = [];

    public function set($key, $definition): void
    {
        $this->definitions[$key] = $definition;
    }

    public function get($key)
    {
        if (!isset($this->definitions[$key])){
            throw new \LogicException("Service not found. " . $key);
        }
        return $this->definitions[$key];
    }
}