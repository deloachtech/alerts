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

class AlertsHTML implements AlertsHTMLInterface
{

    public function getHTML(array $attr): ?string
    {
        $count = count($attr['alerts']);
        $indicator = $count > 0 ? ' <span class="alert-indicator">' . $count . '</span>' : "";

        $list = '';
        foreach ($attr['alerts'] as $alert) {
            $list .= <<<LIST
<li><a class="dropdown-item" href="{$alert[0]}">{$alert[1]}</a><br><small>{$alert[2]}</small></li>
LIST;
        }
        return <<<STR
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Alerts{$indicator}</a>
    <ul class="dropdown-menu">
        {$list}
    </ul>
</li>
STR;
    }
}