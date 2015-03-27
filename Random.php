<?php

namespace Managlea\Random;


abstract class RandomManager implements RandomInterface {
	
	protected abstract function findSingle($resourceId);
	
	protected function __construct() {
		//
	}
	
	final public static function getSingle($resourceName, $resourceId)
	{
		$resourceManager = self::create();
		$resource = $resourceManager->findSingle($resourceId);
		$resource['name'] = $resourceName;
		return $resource;
	}
	
	final private static function create()
	{
		return new DoctrineResourceManager();
	}
}

class DoctrineResourceManager extends ResourceManager
{
	protected function findSingle($resourceId)
	{
		$data = array(
			'name' => null,
			'id' => $resourceId
		);
		
		return $data;
	}
}
