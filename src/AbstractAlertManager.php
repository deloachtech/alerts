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

abstract class AbstractAlertManager
{

    /**
     * Return an optional array of resources passed to each alert
     * (i.e. Database).
     * @return array
     */
    abstract protected function resources(): ?array;


    /**
     * Return an array alert of configurations, where the keys are the
     * FQCN of the AlertInterface class and the values are an array of
     * optional settings passed back to your alert manager class for
     * your evaluation.
     * [
     *   App\Alerts\FooAlert,
     *   App\Alerts\BarAlert => [ role => SuperUser ],
     * ]
     * @return array
     */
    abstract protected function config(): array;


    /**
     * Returns the alerts in HTML.
     * @param AlertsHTMLInterface $alertsHTML
     * @return string
     */
    public function getAlerts(AlertsHTMLInterface $alertsHTML): string
    {
        return $alertsHTML->getHTML($this->alertsArray());
    }


    /**
     * Returns an array of applicable alerts sorted by priority.
     * Use this method for creating different HTML output methods.
     * @return array = [[href, title, message, priority],...]
     */
    protected function alertsArray(): array
    {
        $alerts = [];

        foreach ($this->config() as $k => $v) {

            if (is_array($v)) {
                $fqcn = $k;
                $extra = $v;
            } else {
                $fqcn = $v;
                $extra = [];
            }

            if (class_exists($fqcn)) {
                $class = new $fqcn();
                $class->initialize($extra, $this->resources() ?? []);
                if ($class->isApplicable()) {
                    $alerts[] = [
                        'href' => $class->href(),
                        'title' => $class->title(),
                        'message' => $class->message(),
                        'priority' => $class->priority() ?? 0
                    ];
                }
            }
        }
        if ($alerts) {
            uasort($alerts, function ($a, $b) {
                return $b['priority'] <=> $a['priority'];
            });
        }
        return $alerts;
    }

}