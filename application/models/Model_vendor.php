<?php

class model_vendor extends CI_Model{
    
    
    function save(){
        $data = array('id_vendor'=> $this->input->post('id_vendor'),
                'nama_vendor'=> $this->input->post('nama_vendor'), 
                'no_telp'=> $this->input->post('no_telp'),
                'alamat'=> $this->input->post('alamat')
            );
        $this->db->insert('table_vendor', $data);
    }
    
    function view(){
        $query = "SELECT * from table_vendor";
        return $this->db->query($query);
    }
    
    function get_one($id){
        $query = "SELECT * from table_vendor where id_vendor ='$id'";
        return $this->db->query($query);
    }
    
    function edit(){
        $data = array(
                'nama_vendor'=> $this->input->post('nama_vendor'), 
                'no_telp'=> $this->input->post('no_telp'),
                'alamat'=> $this->input->post('alamat')
            );
        $this->db->where('id_vendor', $this->input->post('id_vendor'));
        $this->db->update('table_vendor', $data);
    }

    function delete($id){
        $this->db->where('id_vendor', $id);
        $this->db->delete('table_vendor');
    }
    
    function cek_id($table,$where){		
            return $this->db->get_where($table,$where);
	}
}

