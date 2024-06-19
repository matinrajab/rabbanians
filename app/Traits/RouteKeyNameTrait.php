<?php

namespace App\Traits;

trait RouteKeyNameTrait
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
