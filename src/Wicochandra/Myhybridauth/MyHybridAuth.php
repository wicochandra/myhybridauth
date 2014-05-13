<?php namespace Wicochandra\Myhybridauth;

use Hybrid_Auth;

class MyHybridAuth extends Hybrid_Auth {


    public static function isConnectedToOne()
    {
        $provider_names = self::getConnectedProviders();
        $num_providers = count($provider_names);
        if (!$num_providers){
            return false;
        }
        else if ($num_providers > 1) {
            return false;
        }

        $provider_name = $provider_names[0];
        if (self::isConnectedWith($provider_name)){
            return $provider_name;
        }

        return false;
    }

    public static function isAppAuthorizedTo($provider)
    {
        if (!Parent::isConnectedWith($provider))
            return false;
        try {
            $adapter = Self::getAdapter($provider);
            $adapter->getUserProfile();
        }
        catch (Exception $e) {
            if ($e->getCode() == 5)
                return false;
            throw $e;
        }
        return true;
    }
}
