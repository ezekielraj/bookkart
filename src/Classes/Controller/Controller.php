<?php
namespace App\Controller;
abstract class Controller {
    //protected $app;
    public function __construct($container) {
        $this->db = $container->db;
        $this->logger = $container->logger;
        $this->mongodb = $container->mongodb;
    }
}