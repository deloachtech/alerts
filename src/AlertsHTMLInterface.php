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

interface AlertsHTMLInterface
{

    /**
     * Return the HTML to render. Use the array attributes as needed.
     * Provides an array of applicable alerts with attributes.
     * @param array $alerts = [ [href, title, message, priority], ... ]
     * @return string
     */
    public function getHTML(array $alerts): ?string;
}