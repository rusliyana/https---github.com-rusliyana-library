<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller
 {
    public function index()
    {
        $data['news'] = $this->User_model->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('templates/index', $data);
        $this->load->view('templates/footer',$data);
    }
    public function tambah_data()
    {
        $data['news'] = $this->News_model->SemuaData();
        $this->load->view('templates/header');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar');
        $this->load->view('home/tambah_data', $data);
        $this->load->view('templates/footer');
    }
   public function proses_tambah_data()
    {
        // Configuration for uploading 'buku' files
        $config['upload_path'] = FCPATH . 'buku/';
        $config['allowed_types'] = 'jpeg|jpg|png|pdf|docx';
        $config['max_size'] = 50000;
        $config['max_width'] = 50000;
        $config['max_height'] = 50000;

        // Load Upload library with 'buku' configuration
        $this->load->library('upload', $config);

        // Check if 'userfile' (buku file) upload is successful
        if ($this->upload->do_upload('userfile')) {
            $buku = $this->upload->data('file_name');
        } else {
            // Handle upload error
            $error = $this->upload->display_errors();
            echo $error;
            return; // Exit function if upload fails
        }

        // Configuration for uploading 'gambar' files
        $gambar_config['upload_path'] = FCPATH . 'gambar/';
        $gambar_config['allowed_types'] = 'jpeg|jpg|png|pdf|docx';
        $gambar_config['max_size'] = 50000;
        $gambar_config['max_width'] = 50000;
        $gambar_config['max_height'] = 50000;

        // Load Upload library with 'gambar' configuration
        $this->upload->initialize($gambar_config);

        // Check if 'gambar' upload is successful
        if ($this->upload->do_upload('image')) {
            $gambar = $this->upload->data('file_name');
        } else {
            // Handle upload error
            $error = $this->upload->display_errors();
            echo $error;
            return; // Exit function if upload fails

        }
        

        // If both uploads are successful, insert data into database
        $title = $this->input->post('title', TRUE);
        $text = $this->input->post('text', TRUE);

        $data = array(
            'gambar' => $gambar,
            'title' => $title,
           
            'buku' => $buku,
        );
        $this->db->insert('news', $data);
        redirect('home');

    }


    public function download()
    {}

    public function delete_data($id)
    {
        $this->News_model->delete_data($id);
        redirect('home');
    }

    public function edit_data($id)
    {
        $data['news'] = $this->News_model->ambil_id_news($id);

        $this->load->view('templates/header');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/edit_data', $data);
        $this->load->view('templates/footer');
    }

    public function proses_edit_data()
    {
        $id = $this->input->post('id');
        $this->News_model->proses_edit_data($id);
        redirect('home');
    }


}
