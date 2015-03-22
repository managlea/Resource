<?php

namespace Managlea\Resource;

use Managlea\Resource as AbstractResource;

class Action extends AbstractResource
{
    protected $action;

    protected $new_data;

    public function __construct($namespace, $action, array $new_data = null)
    {
        parent::__construct($namespace);
        $this->action = $action;

        if (!is_null($new_data))
        {
            $this->new_data = $new_data;
        }
    }
}