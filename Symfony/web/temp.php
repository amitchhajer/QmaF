#!/usr/bin/env php
# app/console
<?php
require_once('../app/bootstrap.php.cache');
require_once('../app/autoload.php');

//namespace Leezy\PheanstalkBundle\Command;
use Leezy\PheanstalkBundle\Command\PeekCommand2;
//use Acme\DemoBundle\Command\;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new PeekCommand2);
$application->run();
