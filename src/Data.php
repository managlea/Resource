<?php

namespace Managlea\Resource;

use Managlea\Resource\Resource as AbstractResource;

abstract class Data extends AbstractResource
{
    /**
     * @var array
     */
    protected $data = array();

    /**
     * @return string
     */
    abstract public function toJSON();

    public function __construct($namespace, array $data)
    {
        parent::__construct($namespace);
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}
