<?php

//namespace Managlea\Resource\Tests;

use Managlea\Resource\Data\Single as SingleResource;

class SingleTest extends \PHPUnit_Framework_TestCase
{
    public function testSingleResource()
    {
        $resourceId = rand(100, 999);
        $namespace = md5(microtime() . rand(1, 1000) * rand(1 , 1000));
        $data = array(
            'id' => $resourceId,
            'foo' => 'bar'
        );

        $resource = new SingleResource($resourceId, $namespace, $data);

        $this->assertEquals(true, $resource->getId() == $resourceId);
        $this->assertEquals(true, $resource->getData() == $data);
        $this->assertEquals(true, $resource->toJSON() == json_encode($data));
    }
} 