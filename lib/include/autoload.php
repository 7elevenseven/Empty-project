<?php
function spl_autoload_class($class) {
    sql_autoload_dir("lib/class", $class);
}

function sql_autoload_dir($dir, $class) {
    if(is_file($dir . "/" . $class . ".php")) {
        require_once $dir. "/" . $class . ".php";
    }
}

?> 