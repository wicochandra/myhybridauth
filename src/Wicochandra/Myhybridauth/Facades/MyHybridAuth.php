<?php namespace Wicochandra\Myhybridauth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wicochandra\Myhybridauth\MyHybridAuth
 */
class MyHybridAuth extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'myhybridauth'; }
}
