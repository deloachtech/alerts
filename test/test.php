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

include __DIR__ . '/../src/AbstractAlertManager.php';
include __DIR__ . '/../src/AlertInterface.php';
include __DIR__ . '/../src/AlertsHTMLInterface.php';
include __DIR__ . '/../example/AlertsHTML.php';
include __DIR__ . '/../example/ExampleAlert.php';
include __DIR__ . '/../example/AlertManager.php';
include __DIR__ . '/../example/Foo.php';



$alertManager = new AlertManager(new Foo());

$alerts = $alertManager->getAlerts(new AlertsHTML());


echo '<pre>';
echo print_r([
    '$alerts' => $alerts,
], true);
echo '</pre>';


