<?php
class Worker {
  
  private $path;

  public function __construct($path) {
    $this->setBasePath($path);
    $this->log('starting');
    require_once('pheanstalk/pheanstalk_init.php');
    $this->pheanstalk = new Pheanstalk('127.0.0.1:11300');
  }
   
  public function __destruct() {
    $this->log('ending');
  }
  
  private function setBasePath($path) {
    $this->path = $path;
  }

  public function run() {
    $this->log('starting to run');
    $cnt = 0;
    $done_jobs = array();

    while(1) {
      $job = $this->pheanstalk->watch('test')->ignore('default')->reserve();
      $job_encoded = json_decode($job->getData(), false);
      $done_jobs[] = $job_encoded;
      $this->log('job:'.print_r($job_encoded, 1));
      $this->pheanstalk->delete($job);
      $cnt++;

      $memory = memory_get_usage();

      $this->log('memory:' . $memory);

      if($memory > 1000000) {
        $this->log('exiting run due to memory limit');
        exit;
      }

      usleep(10);
    }
  }
  
  private function log($txt) {
    file_put_contents($this->path . '/log/worker.txt', $txt . "\n", FILE_APPEND);
  }
}

$worker = new Worker(dirname($argv[0]));
$worker->run();
