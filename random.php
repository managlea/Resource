<?php

interface ResourceManagerInterface {
	
	public static function getSingle($resourceName, $resourceId);
	
	//public static function getCollection($resourceName, array $filters = array());
	
	//public static function postSingle($resourceName, array $data);
}

abstract class ResourceManager implements ResourceManagerInterface {
	
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

print_r(ResourceManager::getSingle('foo', rand(1, 10000)));

