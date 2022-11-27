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


class Alert implements AlertInterface
{

    private $config;
    private $resources;

    public function initialize(array $config, array $resources)
    {
        $this->config = $config;
        $this->resources = $resources;
    }


    public function isApplicable(): bool
    {
        return true;
    }


    public function title(): string
    {
        return 'Example Alert';
    }


    public function message(): string
    {
        return 'This is the example alert.';
    }


    public function href(): string
    {
        return 'index.php';
    }


    public function priority(): int
    {
        return 1;
    }
}