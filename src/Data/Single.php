<?php

namespace Managlea\Resource\Data;

use Managlea\Resource\Data as AbstractDataResource;

class Single extends AbstractDataResource
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @param string|int $id Resource id
     * @param string $namespace Resource namespace
     * @param array $data Resource data
     */
    public function __construct($id, $namespace, array $data)
    {
        parent::__construct($namespace, $data);
        $this->id = $id;
    }
    /**
     * @return int Resource id
     */
    public function getId()
    {
        return $this->id;
    }

    public final function toJSON()
    {
        return json_encode($this->data);
    }
} 