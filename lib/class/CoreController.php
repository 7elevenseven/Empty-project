<?php

class CoreController {

    public static function run() {
        require_once('lib/vendor/smarty/include.php');
        require_once('lib/vendor/redbeanphp/include.php');
        require_once('lib/class/Config.php');
        require_once('lib/class/Route.php');

        Routing::run();
    }
}

?>
 