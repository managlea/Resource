<?php

namespace Managlea\Resource\Action;

use Managlea\Resource\Action;

class Error extends Action
{
    protected $errors = array();

    public function __construct($namespace, $action, array $errors)
    {
        parent::__construct($namespace, $action);

        $this->errors = $errors;
    }
}