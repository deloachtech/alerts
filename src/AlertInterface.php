<?php
/*
 * This file is part of the deloachtech/alerts-plus package.
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