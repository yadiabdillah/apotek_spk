<?php

class model_dokter extends CI_Model{
    
    
    function save(){
        $data = array('nama_dokter'=> $this->input->post('nama_dokter'), 
                'telepon'=> $this->input->post('telepon'),
                'alamat'=> $this->input->post('alamat')
            );
        $this->db->insert('table_dokter', $data);
    }
    
    function view(){
        $query = "SELECT * from table_dokter";
        return $this->db->query($query);
    }
    
    function get_one($id){
        $query = "SELECT * from table_dokter where id_dokter ='$id'";
        return $this->db->query($query);
    }
    
    function edit(){
        $data = array(
                'nama_dokter'=> $this->input->post('nama_dokter'), 
                'telepon'=> $this->input->post('telepon'),
                'alamat'=> $this->input->post('alamat')
            );
        $this->db->where('id_dokter', $this->input->post('id_dokter'));
        $this->db->update('table_dokter', $data);
    }

    function delete($id){
        $this->db->where('id_dokter', $id);
        $this->db->delete('table_dokter');
    }
    
    function cek_id($table,$where){		
            return $this->db->get_where($table,$where);
	}
}

