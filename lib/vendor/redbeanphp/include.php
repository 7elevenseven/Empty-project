<?php
require_once "lib/vendor/redbeanphp/rb.phar";

R::setup('mysql:host=' . MYSQL_HOST . '; dbname=' . MYSQL_DATA, MYSQL_USER, MYSQL_PASS);
//R::freeze(true);
//R::debug(true);

?> 