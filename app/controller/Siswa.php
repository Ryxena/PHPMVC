<?php

    class Siswa extends Controller {
        public function index() {
            $data['title'] = 'siswa';
            $data['siswa'] = $this->model('siswa_db')->getAllSiswa();
            var_dump($data);
        }
    }
