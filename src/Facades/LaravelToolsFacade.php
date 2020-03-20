<?php

namespace Mengdodo\LaravelTools\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelToolsFacade extends Facade{
    public static function getFacadeAccessor()
    {
        return 'LaravelTools';
    }
}
