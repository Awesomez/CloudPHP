<?php

class Base {
    static function getHost(){
        return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . ':' . $_SERVER['SERVER_PORT'];
        //return Z::$config['WEBSITE']['DOMAIN'];
    }

    static function getUri(){
        return self::getHost().$_SERVER['REQUEST_URI'];
    }

    static function getUrl(){
        return strstr(self::getUri().'?','?',true);
    }

    static function getWebDir(){
        //$dir=dirname($_SERVER['SCRIPT_NAME']);
        //$dir=$dir=='\\'?'/':$dir;
        return Z::$config['WEBSITE']['DIR'];
    }
    
    static function debug($switch) {
        if ($switch) {
            ini_set('display_errors', 'On');
            error_reporting(E_ALL);
        } else {
            error_reporting(0);
        }
    }

}
