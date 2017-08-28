<?php

$libs = scandir("lib/vendor");

foreach($libs as $lib) {
    if(!($lib == "." || $lib == "..") && is_dir("lib/vendor/" . $lib)) {
        require_once "lib/vendor/" . $lib . "/include.php";
    }
}

?> 