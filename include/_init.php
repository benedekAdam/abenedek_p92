<?php

session_start();

header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('Europe/Budapest');

define('SITE_ROOT', realpath(dirname(__FILE__) . '/..'));

require_once(__DIR__ . '/../config/server.config.php');