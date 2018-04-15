
<?php

echo "shubham";

class Index extends CI_Controller {

    public function index(){

        //$this->load->view('welcome_message');
        $data=[];

        $this->load->view('templates/header');
        $this->load->view('home/home',$data);
        $this->load->view('templates/footer');
    }


    
}

?>