<?php

namespace App\Controller;

abstract class BaseController
{
    abstract public function render(string $page): void;
}