<?php

namespace Belz\RmsId\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Belz\RmsId\RmsId
 */
class RmsId extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Belz\RmsId\RmsId::class;
    }
}
