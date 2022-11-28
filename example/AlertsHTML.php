<?php

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