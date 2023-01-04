<?php
/*
 * This file is part of the deloachtech/alerts package.
 *
 * Copyright (c) DeLoach Tech, LLC
 * https://deloachtech.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace DeLoachTech\Alerts;


interface AlertInterface
{

    /**
     * The method arrays are provided by the AbstractAlertManager
     * alertsArray() and resources() methods.
     * @param array $extra Values you've assigned to the alert in the configuration.
     * @param array $resources
     */
    public function initialize(array $extra, array $resources);


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