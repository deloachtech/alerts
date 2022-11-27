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

abstract class AbstractAlertManager
{

    /**
     * Return an optional array of resources passed to each alert
     * (i.e. Database). This method should be a protected function to
     * limit scope to the manager.
     * Tip: Pass resources from your AlertManager class constructor.
     * @return array
     */
    abstract protected function resources():? array;


    /**
     * Return an array alert of configurations, where the keys are the
     * FQCN of the AlertInterface class and the values are an array of
     * optional settings passed back to your alert manager class for
     * your use.
     * [
     *   App\Alerts\FooAlert => [],
     *   App\Alerts\BarAlert => [ role => SuperUser ],
     * ]
     * This method should be a protected function to limit scope
     * to the manager.
     * Tip: Create a config.php file and return its content.
     * @return array
     */
    abstract protected function config(): array;


    /**
     * Returns te alerts in HTML format.
     * @return string
     */
    public function getAlerts(AlertsHTMLInterface $alertsHTML): string
    {
        return $alertsHTML->getHTML(['alerts' => $this->alertsArray()]);
    }


    /**
     * Returns an array of applicable alerts sorted by priority.
     * Use this method for creating different HTML output methods.
     * [0=href, 1=title, 2=message, 3=priority]
     * @return array
     */
    protected function alertsArray(): array
    {
        $alerts = [];
        foreach ($this->config() as $fqcn => $array) {
            if (class_exists($fqcn)) {
                $class = new $fqcn();
                $class->initialize($array, $this->resources() ?? []);
                if ($class->isApplicable()) {
                    $alerts[] = [
                        $class->href(),
                        $class->title(),
                        $class->message(),
                        $class->priority() ?? 0
                    ];
                }
            }
        }
        if ($alerts) {
            uasort($alerts, function ($a, $b) {
                return $b[3] <=> $a[3];
            });
        }
        return $alerts;
    }

}