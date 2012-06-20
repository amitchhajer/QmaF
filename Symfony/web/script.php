<?php
require_once('../vendor/pheanstalk/pheanstalk_init.php');
$pheanstalk = new \Pheanstalk('127.0.0.1:11300');

for($i=0; $i<1000; $i++) {
  $job = new stdClass();
  $job->envelope_id = rand();
  $job->date = date('Y-m-d H:i:s');
  $job_data = json_encode($job);
  $pheanstalk->useTube('newtube')->put($job_data);
  echo "pushed: " . $job_data . "\n";
}
