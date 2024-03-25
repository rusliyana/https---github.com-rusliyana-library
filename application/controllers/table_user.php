<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class table_user extends CI_Controller
 {
    public function index()
    {
        $data['user'] = $this->Table_model->SemuaUser();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/admin_sidebar',$data);
        $this->load->view('templates/admin_topbar',$data);
        $this->load->view('templates/edit_user', $data);
        $this->load->view('templates/footer',$data);
    }

    public function delete_user($id)
    {
        $this->Table_model->delete_user($id);
        redirect('table_user');
    }

    public function edit_user($id)
    {
        $data['user'] = $this->Table_model->ambil_id_user($id);
        $this->load->view('templates/header');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar');
        $this->load->view('table_user/edit_data', $data);
        $this->load->view('templates/footer');
    }

    public function proses_edit_user()
    {
        $id = $this->input->post('id');
        $this->Table_model->proses_edit_user($id);
        redirect('table_user');
    }

 }