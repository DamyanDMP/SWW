<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-14 12:33:08
 */

$app = Yee\Yee::getInstance();

$app->map("/send", "AjaxController::___sendAction")->via("GET")->name("send.index");

