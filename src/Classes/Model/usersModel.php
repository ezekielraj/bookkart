<?php

namespace App\Model;

class usersModel {
    
    public function __construct($db) {
        $this->db = $db;
    }
    public function getUsers(){
	return "hi";
    }
}
