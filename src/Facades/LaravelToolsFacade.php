<?php

namespace Mengdodo\LaravelTools\Facade;

use Illuminate\Support\Facades\Facade;

class LaravelToolsFacade extends Facade{
    public static function getFacadeAccessor()
    {
        return 'LaravelTools';
    }
}
