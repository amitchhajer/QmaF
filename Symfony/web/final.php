<?php

// register Pheanstalk class loader
require_once('/var/www/amit/Symfony/vendor/pheanstalk/classes/Pheanstalk/Pheanstalk.php');
require_once('app/bootstrap.php.cache');
require_once('app/autoload.php');

$pheanstalk = new Pheanstalk('127.0.0.1','11300','60');

// ----------------------------------------
// producer (queues jobs)

$job = $pheanstalk
  ->watch('testtube')
  ->ignore('default')
  ->reserve();

echo $job->getData();

$pheanstalk->delete($job);

?>
