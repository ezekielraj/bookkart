<?php
namespace App\Model;
abstract class Mapper {
    //protected $app;
    public function __construct($mongodb) {
        $this->mongodb = $mongodb;
    }
}