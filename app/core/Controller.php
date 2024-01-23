<?php 

class Controller{
    public function view($view, $data = []) {
        require_once('../app/view/' . $view . '.php');
    }
}
?>