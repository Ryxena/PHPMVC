<?php 

class Home extends Controller {
    public $data = ['title' => 'apa yuh'];

    public function Index(){
        // echo "existed";
        $this->view('template/header', $this->data['title']);
        $this->view('home/index');
        $this->view('template/footer');
    }
}