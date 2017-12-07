<?php

namespace App;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class Log {
    public static $_logger = null;

    public static function getLogger(){
        if(!self::$_logger){
            self::$_logger = new Logger('App Log');
        }
        return self::$_logger;
    }

    public static function logError($error){
        self::getLogger()->pushHandler(
            new StreamHandler('../logs/error.log', Logger::ERROR)
        );
        self::getLogger()->addError($error);
    }

    public static function logInfo($info){
        self::getLogger()->pushHandler(
            new StreamHandler('../logs/info.log', Logger::INFO)
        );
        self::getLogger()->addInfo($info);
    }
}