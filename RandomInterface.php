<?php

namespace Managlea\Randon;

interface ResourceManagerInterface {
	
	public static function getSingle($resourceName, $resourceId);
	
	//public static function getCollection($resourceName, array $filters = array());
	
	//public static function postSingle($resourceName, array $data);
}
