<?php 

class Design extends Controller {
    public $data = ['title' => 'apa yuh'];

    public function Index(){
        // echo "existed";
        $this->view('template/header', $this->data['title']);
        $this->view('design/index');
        $this->view('template/footer');
    }
}