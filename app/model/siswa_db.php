<?php
    class siswa_db {
        private $table = "siswa";
        private $db;
        
        public function __construct() {
            $this->db = new Db();
        }

        public function getAllSiswa() {
            $this->db->query("SELECT * FROM ". $this->table);
            return $this->db->resultSet();
        }
    }
?>