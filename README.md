Alerts Plus
===========

`v1.0.0-beta.0`

A PHP package for incorporating highly configurable alert system into your application.

* Framework or vanilla PHP environments
* No database requirements
* Extendable
* Injection of HTML elements from any source
* Structured for HTML and configuration Separation of Concerns (SoC)
* Custom configuration values can be processed for each alert (i.e. access control)
* Alerts can be prioritized
* Optional message can be provided for each alert


![Example alerts.](https://github.com/deloachtech/alerts-plus/blob/main/example/alerts.png)


Installation
------------

```bash
composer require aarondeloach/alerts-plus
```


Usage
-----

> Examples are provided using simple procedural logic. The package can be incorporated into any framework or architectural pattern.

### Setup

Create an alert HTML class that extends the `AlertHTMLInterface` and implements its methods. This class will provide the HTML used to generate the alerts list. See the [example](https://github.com/deloachtech/alerts-plus/blob/main/example/FormHTML.php) for more information.


```php
// App\AlertHTML.php

use DeLoachTech\AlertsPlus\AlertsHTMLInterface;

class AlertsHTML extends AlertsHTMLInterface
{
    // Implement the interface methods ...
}
```


### Managing Alerts

1. Create a [class for managing alerts](https://github.com/deloachtech/alerts-plus/blob/main/example/AlertManager.php) that extends the `AbstractAlertManager` and implement its methods.
2. Create an array of [alert configurations](https://github.com/deloachtech/alerts-plus/blob/main/example/config.php) to provide the manager.


```php
// App\AlertManager.php

namespace App;

use DeLoachTech\AlertsPlus\AbstractAlertManager;

class AlertManager extends AbstractAlertManager
{
    // Implement the interface methods ...
}
```

```php
// config\alerts.php

return [
    // ...
    'App\FooBarAlert' => [],
    'App\AccountInfoRequiredAlert' => [
         // Provide anything you want to validate/process in the alert.
        'role' => 'SuperUser'
    ]
    // ...
];
```

> E


### Creating Alerts

Create a class for each alert that implements the `AlertInterface` and its methods. Activate the alert in the [configuration](https://github.com/deloachtech/alerts-plus/blob/main/example/config.php) that's passed to the manager.

```php
// App\AccountInfoRequiredAlert.php

namespace App;

use DeLoachTech\AlertsPlus\AlertInterface;

class AccountInfoRequiredAlert extends AlertInterface
{
    // Implement the interface methods ...    
}
```


### Displaying Alerts

Somewhere in you HTML layer:

```php
// dashboard.php

namespace App;

// ...

echo (new AlertManager())->getAlerts(new AlertHTML());
```