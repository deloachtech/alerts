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

class AlertManager extends AbstractAlertManager
{

    private $foo;

    /*
     * An example of how to pass a class to the AlertInterface.
     */
    public function __construct(Foo $foo)
    {
        $this->foo = $foo;
    }


    protected function config(): array
    {
        /*
         * An example of how to pass a file to the AlertInterface.
         */
        return include(__DIR__ . '/config.php');
    }


    protected function resources(): ?array
    {
        /*
         * An example of how to pass a class to the AlertInterface.
         */
        return ['foo' => $this->foo];
    }
}