<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class mainpage extends CI_Controller{
    public function index()
    {
      
        $this->load->view('main/menu');
        $this->load->view('main/mainpage');
    
        
        

    }

    public function about()
    {
       
        $this->load->view('main/about');
    }
}
