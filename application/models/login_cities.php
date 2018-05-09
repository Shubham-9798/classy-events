<?php
class Login_cities extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
  
       public function get_cities(){

              $query = $this->db->get('cities');
                return $query->result_array();
       }

       public function insert_entry($data)
       {
                 // please read the below note
                 echo $data['email'];
                 $query=$this->db->get_where('login', array('email'=>$data['email']));//true
        //   var_dump( $query);
                // $query=$this->db->get_where('login', $data['email']->row());
                //  if(!$query->result==1)
                if(!$query->row())
                return $this->db->insert('login',$data);
                else 
                return false;
       }







}