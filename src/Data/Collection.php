<?php

namespace Managlea\Resource\Data;

use Managlea\Resource\Data as AbstractDataResource;

class Collection extends AbstractDataResource
{
    /**
     * @var array
     */
    protected $filters = array();
    /**
     * @var int
     */
    protected $count;

    public function __construct(array $filters, $namespace, array $data)
    {
        parent::__construct($namespace, $data);
        $this->filters = $filters;
        $this->count = count($data);
    }

    public final function toJSON()
    {
        $data = array();

        foreach ($this->getData() as $resource)
        {
            $data[] = $resource->getData();
        }

        return json_encode($data);
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
    /**
     * @return array
     */
    public function getFilters()
    {
        return $this->filters;
    }
}