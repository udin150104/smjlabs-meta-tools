<?php

namespace Smjlabs\MetaTools\Facades;

use Smjlabs\MetaTools\MetaManager;
use Illuminate\Support\Facades\Facade;

class MetaTools extends Facade
{
    protected static function getFacadeAccessor()
    {
        return MetaManager::class;
    }
}
