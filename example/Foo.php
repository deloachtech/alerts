<?php

namespace DeLoachTech\Alerts;

use stdClass;

class Foo
{
    private $object;


    public function __construct()
    {
        $object = new stdClass;
        $object->name = "Bar";
        $this->object = $object;
    }


    public function getObject(): stdClass
    {
        return $this->object;
    }

    public function getName(){
        return $this->object->name;
    }
}