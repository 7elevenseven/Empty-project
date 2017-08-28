<?php

/**
 * Created by PhpStorm.
 * User: cloudyyy
 * Date: 27.09.16
 * Time: 17:53
 */
class Top10
{
    public static function view() {
        global $_TEMPLATE;

        $_TEMPLATE->assign("site", "top10");
        $_TEMPLATE->display("dashboard.tpl");
    }
}