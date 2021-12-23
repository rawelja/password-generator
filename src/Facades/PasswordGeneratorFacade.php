<?php

namespace Rawelja\PasswordGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class PasswordGeneratorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'password-generator';
    }
}
