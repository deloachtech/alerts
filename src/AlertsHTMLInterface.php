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

interface AlertsHTMLInterface
{

    /**
     * Return the HTML to render. (Use $attr[values] as needed.)
     * $attr[alerts] = [0=href, 1=title, 2=message, 3=priority]
     * @param array $attr = [alerts]
     * @return string
     */
    public function getHTML(array $attr): ?string;
}