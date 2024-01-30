<?php
    class User extends Controller {
        public function index() { 
            $data['title'] = 'siswa';
            $data['user'] = $this->model('user_db')->getAllUsers();
            // var_dump($data);
            $this->view('user/index', $data);
        }
    }
?>