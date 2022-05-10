<?php

namespace system\core;

use RegexIterator;

class Router
{
    public string $url;
    public $method;
    public array $params;

    public function get(): self
    {
        return $this;
    }
    
    public function group()
    {
        return $this;
    }

    public function auth()
    {
        return $this;
    }

    public function prefix()
    {
        return $this;
    }
}