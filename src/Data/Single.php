<?php

namespace Managlea\Resource\Data;

use Managlea\Resource\Data as AbstractDataResource;

class Single extends AbstractDataResource
{
    /**
     * @var int
     */
    protected $resourceId;

    /**
     * @param string|int $id Resource id
     * @param string $namespace Resource namespace
     * @param array $data Resource data
     */
    public function __construct($resourceId, $namespace, array $data)
    {
        if (!is_int($resourceId))
        {
            throw new Exception('$id must be integer');
        }
        
        parent::__construct($namespace, $data);
        $this->resourceId = $resourceId;
    }

    /**
     * @return int Resource id
     */
    public function getId()
    {
        return $this->resourceId;
    }

    final public function toJSON()
    {
        return json_encode($this->data);
    }
}
