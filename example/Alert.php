<?php

namespace DeLoachTech\AlertsPlus;


class Alert implements AlertInterface
{

    private $config;
    private $resources;

    public function initialize(array $config, array $resources)
    {
        $this->config = $config;
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