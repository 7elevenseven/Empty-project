<?php

require_once "lib/vendor/smarty/libs/SmartyBC.class.php";

# configure
$_TEMPLATE = new SmartyBC();

$_TEMPLATE->addTemplateDir("template/tpl");

$_TEMPLATE->setCompileDir("temp/");
$_TEMPLATE->setCacheDir("temp/");

$_TEMPLATE->assign("hostname", $_SERVER['HTTP_HOST']);
$_TEMPLATE->assign("CURRENT_PAGE", $_SERVER['QUERY_STRING']);

global $_TEMPLATE;

?> 