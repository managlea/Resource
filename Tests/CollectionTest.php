<?php

namespace Managlea\Resource\Tests;

use Managlea\Resource\Data\Collection as ResourceCollection;
use Managlea\Resource\Data\Single as SingleResource;

class CollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testResourceCollection()
    {
        $resourceId = rand(100, 999);
        $namespace = md5(microtime() . rand(1, 1000) * rand(1, 1000));
        $resourceData = array(
            'id' => $resourceId,
            'foo' => 'bar'
        );

        $resource = new SingleResource($resourceId, $namespace, $resourceData);

        $data = array(
            $resource
        );

        $filters = array(
            'limit' => 20
        );

        $collection = new ResourceCollection($filters, $namespace, $data);

        $this->assertEquals(true, $collection->getCount() == count($data));
        $this->assertEquals(true, $collection->getFilters() == $filters);
        $this->assertEquals(true, $collection->toJSON() == json_encode(array($resourceData)));
    }
} 
