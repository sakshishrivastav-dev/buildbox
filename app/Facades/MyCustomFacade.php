<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class MyCustomFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'my-custom-service'; // This should be the service or binding in the container.
    }
}
