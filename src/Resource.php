<?php

namespace Managlea\Resource;
/**
 * Abstract class
 **/
abstract class Resource
{
    /**
     * @var string
     */
    protected $namespace;

    /**
     * @param $namespace
     */
    public function __construct($namespace)
    {
        $this->namespace = $namespace;
    }
}
