<?php

class usersModel {
    
    public function __construct($db) {
        $this->db = $db;
    }
    public function getUsers(){
        $sql = "SELECT *
            from users";
        $stmt = $this->db->query($sql);

        $results = [];
        while($row = $stmt->fetch()) {
            $results[] = $row;
        }
        return $results;
    }
}