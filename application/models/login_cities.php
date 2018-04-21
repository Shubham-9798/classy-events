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








}