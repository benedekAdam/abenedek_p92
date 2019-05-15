<?php

require_once(SITE_ROOT . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

use Phinx\Console\PhinxApplication;
use Phinx\Wrapper\TextWrapper;

$app = new PhinxApplication();
$wrap = new TextWrapper($app);

$wrap->setOption('configuration', SITE_ROOT . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'phinx.php');
$log = $wrap->getMigrate('development');
//echo $log;
return $wrap->getExitCode() === 0;
