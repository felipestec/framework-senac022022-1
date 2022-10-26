<?php

namespace App\FrameworkTools\Implementations\Route;

use App\Controllers\HelloWorldController;
use App\Controllers\TrainQueryController;
use App\Controllers\FelipeController;

trait Get {
    
    private static function get() {
        switch (self::$processServerElements->getRoute()) {
                    
            case '/hello-world':
                return (new HelloWorldController)->execute();
            break;

            case '/train-query':
                return (new TrainQueryController)->execute();
            break;

            case '/stec1':
                return (new FelipeController)->stec1();
            break;
        }
    }

}