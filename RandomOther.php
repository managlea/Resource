<?php

namespace Managlea\Random;

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
