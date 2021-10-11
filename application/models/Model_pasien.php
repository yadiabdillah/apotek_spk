<?php

class model_pasien extends CI_Model{
    
    
    function save(){
        $data = array('nama_pasien'=> $this->input->post('nama_pasien'), 
                'telepon'=> $this->input->post('telepon'),
                'alamat'=> $this->input->post('alamat'),
                'tipe_pasien'=> $this->input->post('tipe_pasien')
            );
        $this->db->insert('table_pasien', $data);
    }
    
    function view(){
        $query = "SELECT * from table_pasien";
        return $this->db->query($query);
    }
    
    function get_one($id){
        $query = "SELECT * from table_pasien where id_pasien ='$id'";
        return $this->db->query($query);
    }
    
    function edit(){
        $data = array(
                'nama_pasien'=> $this->input->post('nama_pasien'), 
                'telepon'=> $this->input->post('telepon'),
                'alamat'=> $this->input->post('alamat'),
                 'tipe_pasien'=> $this->input->post('tipe_pasien')
            );
        $this->db->where('id_pasien', $this->input->post('id_pasien'));
        $this->db->update('table_pasien', $data);
    }

    function delete($id){
        $this->db->where('id_pasien', $id);
        $this->db->delete('table_pasien');
    }
    
    function cek_id($table,$where){		
            return $this->db->get_where($table,$where);
	}
}

