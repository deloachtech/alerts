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