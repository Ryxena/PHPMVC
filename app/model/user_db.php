<?php
    class user_db {
        private $table = "users";
        private $db;
        
        public function __construct() {
            $this->db = new Db();
        }

        public function getAllUsers() {
            $this->db->query("SELECT * FROM ". $this->table);
            return $this->db->resultSet();
        }
    }
?>