<?php

namespace DeLoachTech\AlertsPlus;

class AlertsHTML implements AlertsHTMLInterface
{

    /*
     * This example uses a Bootstrap dropdown menu for use in a navbar <ul>.
     */
    public function getHTML(array $alerts): string
    {
        $count = count($alerts);

        $indicator = $count > 0 ? ' <span class="alert-indicator">' . $count . '</span>' : "";

        $list = '';
        foreach ($alerts as $alert) {
            $list .= <<<LIST
<li><a class="dropdown-item" href="{$alert['href']}">{$alert['title']}</a></li>
LIST;
        }

        $list = !empty($list) ? $list : '<li><a class="dropdown-item" href="#">You have no alerts</a></li>';

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