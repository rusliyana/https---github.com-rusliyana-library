<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class total_user extends CI_Controller{

    public function index()
    {

		$data['user'] = $this->Table_model->userCount();
		$data['buku'] = $this->News_model->newsCount();
	
        $this->load->view('templates/header');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar');
        $this->load->view('total_user/index', $data);
        $this->load->view('templates/footer');

    }


}
