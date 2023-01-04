Alerts
======

A user alert system for web apps.

* Framework or vanilla PHP environments
* No database requirements
* Extendable
* Injection of HTML templates from any source
* Provides for HTML and configuration Separation of Concerns (SoC)
* Custom configuration values can be processed for each alert (i.e. access control)
* Alerts can be prioritized
* Optional message can be provided for each alert


![Example alerts.](example/alerts.png)

Installation
------------


```bash
composer require deloachtech/alerts
```


Usage
-----

> The sample code provided uses simple procedural logic. The package can be incorporated into any framework or architectural pattern.

### Setup

Create an alert HTML class that extends the `AlertHTMLInterface` and implements its methods. This class will provide the project-specific HTML for outputting the alerts list. It should live with your HTML templates for SoC.

```php
// App\Templates\AlertHTML.php

use DeLoachTech\Alerts\AlertsHTMLInterface;

class AlertsHTML extends AlertsHTMLInterface
{
    // Implement the interface methods ...
}
```

> You can use the [example](https://github.com/deloachtech/alerts/blob/main/example/AlertsHTML.php) provided to get started.


### Managing Alerts

Create a class for managing alerts that extends the `AbstractAlertManager` and implement its methods.


```php
// App\AlertManager.php

namespace App;

use DeLoachTech\Alerts\AbstractAlertManager;

class AlertManager extends AbstractAlertManager
{
    // Implement the interface methods ...
}
```

Create a configuration of alerts to provide the alert manager. The array keys are the FQCN of the alert class. The array values are any data you want passed back to the alert for processing.

```php
// config\alerts.php

return [
    // ...
    'App\FooBarAlert',
    'App\AccountInfoRequiredAlert' => [
         // Provide anything you want to evaluate in the alert.
        'role' => 'SuperUser'
    ]
    // ...
];
```

> You can use the [examples](https://github.com/deloachtech/alerts/tree/main/example) provided to get started.


### Creating Alerts

Create a class for each alert that implements the `AlertInterface` and its methods. Activate the alert in the configuration that's passed to the manager.


```php
// App\Alerts\AccountInfoRequiredAlert.php

namespace App;

use DeLoachTech\Alerts\AlertInterface;

class AccountInfoRequiredAlert extends AlertInterface
{
    // Implement the interface methods ...    
}
```


### Displaying Alerts

Somewhere in you HTML layer:

```php
// navbar.php

namespace App;

use App\Templates\AlertHTML;

// ...

echo (new AlertManager())->getAlerts(new AlertHTML());
```


