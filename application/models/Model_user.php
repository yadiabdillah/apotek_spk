<?php

class model_user extends CI_Model{
    
    
    function save(){
        $data = array('id'=> '',
            'nama'=> $this->input->post('nama'),
                'username'=> $this->input->post('username'), 
                'password'=> md5($this->input->post('password')),
                'email'=> $this->input->post('email'),
                'jabatan'=> $this->input->post('jabatan')
            );
        $this->db->insert('table_user', $data);
    }
    
    function view(){
        $query = "SELECT * from table_user";
        return $this->db->query($query);
    }
    
    function get_one($id){
        $query = "SELECT * from table_user where id ='$id'";
        return $this->db->query($query);
    }
    
    function edit(){
        $data = array('nama'=> $this->input->post('nama'),
                'username'=> $this->input->post('username'),
                'email'=> $this->input->post('email'),
                'jabatan'=> $this->input->post('jabatan')
            );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('table_user', $data);
    }
    
    function change_pass(){
        $data = array('password'=> md5($this->input->post('password'))
            );
        $this->db->where('id', $this->session->userdata("id"));
        $this->db->update('table_user', $data);
    }
    
    function reset_pass($id){
        $data = array('password'=> md5('12345')
            );
        $this->db->where('id', $id);
        $this->db->update('table_user', $data);
    }

    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('table_user');
    }
}

