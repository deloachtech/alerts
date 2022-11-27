<?php
/*
 *---------------------------------------------------------------
 * Alerts
 *---------------------------------------------------------------
 *
 * This file simply returns an array of alert configurations.
 *
 *  - The array keys are the FQCN of the alert.
 *  - The array values are anything you want passed back to
 *    the AlertInterface initialize() method.
 *
 */

return [

    'DeLoachTech\AlertsPlus\Alert' => [],

    'App\MyAlert' => [
        'role' => 'SuperUser'
    ]
];
