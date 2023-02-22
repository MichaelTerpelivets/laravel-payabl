<?php

namespace PayablAPI;

use Illuminate\Support\Facades\Facade;

class PayablFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return PayablClient::class;
    }

}