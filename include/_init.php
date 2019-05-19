<?php

session_start();

header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('Europe/Budapest');

define('SITE_ROOT', realpath(dirname(__FILE__) . '/..'));

require_once(SITE_ROOT . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

$baseHref = 'http://' . $_SERVER["HTTP_HOST"] . '/';

require_once('_db.php');
require_once('_modelList.php');
