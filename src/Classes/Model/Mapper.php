<?php
namespace App\Model;
abstract class Mapper {
    //protected $app;
    public function __construct($db) {
        $this->db = $db;
    }
}