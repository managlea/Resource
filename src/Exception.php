<?php

namespace Managlea\Resource;

use Managlea\Resource as AbstractResource;

class Exception extends AbstractResource
{
    /**
     * @var string
     */
    private $exception;

    /**
     * @param string $namespace
     * @param string $exception
     */
    public function __construct($namespace, $exception)
    {
        parent::__construct($namespace);
        $this->exception = $exception;
    }

    /**
     * @return string
     */
    public function getException()
    {
        return $this->exception;
    }
}