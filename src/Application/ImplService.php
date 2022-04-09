<?php

namespace App\Application;

class ImplService implements ServiceInterface
{
    private string $envVar;

    public function __construct(string $envVar)
    {
        $this->envVar = $envVar;
    }

    public function think(): void
    {
        echo self::class . ' -> ' . $this->envVar; die;
    }
}