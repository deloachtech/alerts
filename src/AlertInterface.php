<?php
/*
 * This file is part of the deloachtech/alerts-plus package.
 *
 * Copyright (c) DeLoach Tech
 * https://deloachtech.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DeLoachTech\AlertsPlus;


interface AlertInterface
{

    /**
     * The method arrays are provided by the AbstractAlertManager
     * config() and resources() methods.
     * @param array $config
     * @param array $resources
     */
    public function initialize(array $config, array $resources);


    /**
     * Determine if the alert is applicable for the current environment.
     * (You might implement access control restraints here.)
     * @return bool
     */
    public function isApplicable(): bool;


    public function title(): string;


    public function message(): string;


    public function href(): string;


    public function priority(): int;


}