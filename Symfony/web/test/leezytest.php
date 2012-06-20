<?php

namespace Acme\DemoBundle\Controller;

use vendor\symfony\src\Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    public function indexAction() {
        $pheanstalkPrimary = $this->get("leezy.pheanstalk.primary");
        $pheanstalkDefault
          ->useTube('testtube')
          ->put("job payload goes here\n");
    }
}
