<?php

class Routing
{
    public static function run() {
        require_once('plugins/Top10.php');
        Config::set('basepath','');
        Route::init();

        Route::add('',function(){
            Top10::view();
        });

        Route::add('view', function() {
           $user = \R::load("user", 1);
           echo "Klappt $user->name!!";
        });


        Route::add404(function($url){

            //Send 404 Header
            header("HTTP/1.0 404 Not Found");
            echo '404 :-(<br/>';
            echo $url.' not found!';

        });

        Route::run();
    }
}