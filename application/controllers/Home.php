
<?php



class Home extends CI_Controller {

    public function __contruct(){

        parent::__construct();
        $this->load->model('Login_cities');
     
    }

    public function view($page='home'){

        //$this->load->view('welcome_message');
        
        if ( ! file_exists(APPPATH.'views/home/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        
       
         $data['title']='list of cities';
        //  $data1['css']='style';
        //  $data1['css1']='style1';//make same css for one
         $data['list']=$this->login_cities->get_cities();

        // var_dump($data['list']);

        $this->load->view('templates/header');
        $this->load->view('home/'.$page,$data);
        $this->load->view('templates/footer');
    }
   

    public function login(){

        $data=[];
        // $data2['css1']='style1';

        $this->load->view('templates/header');
        $this->load->view('home/login',$data);
        $this->load->view('templates/footer');

    }




    
}

?>