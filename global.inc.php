<?php

# disable output
//error_reporting(E_ALL ^ E_NOTICE);
ini_set("display_errors", true);

# include config's
require_once "config.php";

# include lib's
require_once "lib/include/autoload.php";

# set autoloader's
spl_autoload_register('spl_autoload_class');

# include vendor lib's
require_once "lib/include/vendor.php";

# starting session if not in CLI
if (!isset($argc))
    session_start();

?> 