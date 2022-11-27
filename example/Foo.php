<?php
/*
 * This file is part of the aarondeloach/alerts-plus package.
 *
 * Copyright (c) DeLoach Tech
 * https://deloachtech.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DeLoachTech\AlertsPlus;

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