<?php

namespace Superman2014\XmlySdk\Facades;

use Illuminate\Support\Facades\Facade;

class Xmly extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'xmly';
    }
}
