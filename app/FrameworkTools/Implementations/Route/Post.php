<?php

namespace App\FrameworkTools\Implementations\Route;

use App\Controllers\InsertDataController;
use App\Controllers\FelipeController;

trait Post {
    
    private static function post() {
        switch (self::$processServerElements->getRoute()) {
                    
            case '/insert-data':
                return (new InsertDataController)->exec();
            break;

            case '/stec2':
                return (new FelipeController)->stec2();
            break;



        }
    }

}