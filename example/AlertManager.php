<?php


namespace DeLoachTech\Alerts;

class AlertManager extends AbstractAlertManager
{

    private $foo;

    /*
     * An example of how to pass a class to the AlertInterface.
     */
    public function __construct(Foo $foo)
    {
        $this->foo = $foo;
    }


    protected function config(): array
    {
        /*
         * An example of how to pass a file to the AlertInterface.
         */
        return include(__DIR__ . '/config.php');
    }


    protected function resources(): ?array
    {
        /*
         * An example of how to pass a class to the AlertInterface.
         */
        return ['foo' => $this->foo];
    }
}