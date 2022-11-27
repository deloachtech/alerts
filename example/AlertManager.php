<?php
/*
 * This file is part of the aarondeloach/alerts-plus package.
 *
 * Copyright (c) DeLoach Tech
 * https://deloachtech.com
 *
 * This source code is protected under international copyright law. All
 * rights reserved and protected by the copyright holders. This file is
 * confidential and only available to authorized individuals with the
 * permission of the copyright holder. If you encounter this file, and do
 * not have permission, please contact the copyright holder and delete
 * this file. Unauthorized copying of this file, via any medium is strictly
 * prohibited.
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