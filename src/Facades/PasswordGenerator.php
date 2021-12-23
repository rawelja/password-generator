<?php

namespace Rawelja\PasswordGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class PasswordGenerator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'password-generator';
    }
}
