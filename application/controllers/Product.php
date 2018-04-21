
<?php

class Product extends CI_Controller {
    
    public function index($page='pdetails'){

        //$this->load->view('welcome_message');
        
        if ( ! file_exists(APPPATH.'views/product/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                echo "ss";
                echo $page;
                show_404();
        }


        $data=[];
        // $data1['css']='style';

        $this->load->view('templates/header');
        $this->load->view('product/'.$page,$data);
        $this->load->view('templates/footer');
    }

    public function details(){

        $data=[];

        $this->load->view('templates/header');
        $this->load->view('product/product1',$data);
        $this->load->view('templates/footer');

    }

}
?>