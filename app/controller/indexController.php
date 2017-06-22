<?php
namespace app\controller;
    class IndexController {
        public function __construct() {
            date_default_timezone_set('GMT');
            \Resque::setBackend('127.0.0.1:6379');
    
            $args = array(
                'time' => time(),
                'array' => array(
                    'test' => 'test',
                ),
            );
    
            $jobId = \Resque::enqueue('default', '\Queue\job', $args, true);
        }
    }