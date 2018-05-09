
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
     

        // $data['reg']=$this->login_cities->
        $data=[];
        // $data2['css1']='style1';

        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('usn', 'Username', 'required');
        $this->form_validation->set_rules('pwd', 'password', 'required');
    
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('home/login');
            $this->load->view('templates/footer');
    
        }
        else
        {
           

            $data = array(
                'name' => $this->input->post('usn'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('pwd'),
                );
                 var_dump($data);
                $t= $this->login_cities->insert_entry($data);
                if($t)
                 {
                     echo "success"; 
                     echo $t;
                     redirect('home');
                }
                else
                  {echo "fail";  
                   echo $t;
                }
                // redirect('Home');
        }

     

    }




    
}

?>