<?php

namespace Acme\DemoBundle\Controller;

require_once('app/bootstrap.php.cache');
require_once('app/autoload.php');

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    public function indexAction() {
        $pheanstalk = $this->get("leezy.pheanstalk");

          $job = $pheanstalk
          ->watch('newtube')
          ->reserve('example');

        echo $job->getData();

//        $pheanstalk->delete($job);
    }

}
?>
