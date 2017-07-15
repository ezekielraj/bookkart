<?php

namespace App\Model;

class usersModel extends Mapper {
    
  
    public function getUsers(){
	$sql = "DESCRIBE Suppliers;";
        $stmt = $this->db->query($sql);

        return var_dump($stmt->fetch());
        }

}
