<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_user extends CI_Controller{

    public function index()
    {
        $data['user'] = $this->db->get_where('user',['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('user/dashboard', $data);
        $this->load->view('templates/footer',$data);

    }


}