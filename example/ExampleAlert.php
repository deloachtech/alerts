<?php

namespace DeLoachTech\Alerts;


class ExampleAlert implements AlertInterface
{

    private $extra;
    private $resources;

    public function initialize(array $extra, array $resources)
    {
        $this->extra = $extra;
        $this->resources = $resources;
    }


    public function isApplicable(): bool
    {
        return true;
    }


    public function title(): string
    {
        return 'Example Alert';
    }


    public function message(): string
    {
        return 'This is the example alert.';
    }


    public function href(): string
    {
        return 'index.php';
    }


    public function priority(): int
    {
        return 1;
    }
}