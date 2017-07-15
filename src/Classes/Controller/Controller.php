<?php
namespace App\Controller;
abstract class Controller {
    //protected $app;
    public function __construct($container) {
        $this->container = $container;
    }
}