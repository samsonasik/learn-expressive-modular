<?php

namespace App;

class AppConfig
{
    public function __invoke()
    {
        return include __DIR__ . '/config/expressive-config.php';
    }
}