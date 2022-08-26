<?php

namespace system\core;

use RegexIterator;

class Router
{
    public string $url;
    public array $params;

    public function get(): self
    {
        return $this;
    }
}