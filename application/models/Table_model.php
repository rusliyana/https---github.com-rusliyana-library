<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table_model extends CI_Model
{
    public function Semuauser()
    {
       return $this->db->get('user')->result_array();
    }

	public function userCount(){
		
		return $count = $this->db->count_all_results('user');
		
	}

    public function delete_user($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

   

    public function ambil_id_user($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }


    public function proses_edit_user($id)
    {
        $data = [
            "name" => $this->input->post('name'),
           
        ];

        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}
