<?php
namespace Core\Middleware;
use Core\middleware\Auth;
use Core\middleware\Guest;
use Core\middleware\RegisteredStd;
use Core\middleware\Admin;
use Core\middleware\AdminStudent;
class Middleware{
    public const MAP= [
       "guest"=> Guest::class,
       "auth"=> Auth::class,
       "admin&accountant"=> AdminAccountant::class,
       "admin"=> Admin::class,
       "admin&manager&pharmacist"=> adminmanagerpharmacist::class,
         "admin&manager&hr"=> AdminManagerHr::class,
         "admin&pharmacist"=> AdminPharmacist::class,
          "admin&manager&accountant"=> AdminManagerAccountant::class,
           "admin&manager"=> AdminManager::class,

    ];
    public static function resolve($key){
        if(!$key){
            return;
        }

        $middleware = static::MAP[$key] ?? false;
        if(!$middleware){
            throw new \Exception("No mathcing middleware found for key '{$key}'.");
        }
        (new $middleware())->handle();
    } 
}