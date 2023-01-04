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

    'DeLoachTech\Alerts\ExampleAlert',

    'App\MyAlert' => [
        // Provide anything you want to evaluate in the alert.
        'role' => 'SuperUser'
    ]
];
