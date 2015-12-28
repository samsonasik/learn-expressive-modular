<?php

namespace Album;

class AlbumConfig
{
    public function __invoke()
    {
        return include __DIR__ . '/config/expressive-config.php';
    }
}