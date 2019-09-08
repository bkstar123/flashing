<?php
/**
 * Flashing Facade
 *
 * @author: tuanha
 * @last-mod: 08-Sept-2019
 */

namespace Bkstar123\Flashing\Facades;

use Illuminate\Support\Facades\Facade;

class Flashing extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flashing';
    }
}
