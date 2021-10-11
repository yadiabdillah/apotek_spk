<?php

class model_obat extends CI_Model{
    
    
    function save(){
        $data = array('id_obat'=> $this->input->post('id_obat'),
                'nama_obat'=> $this->input->post('nama_obat'), 
                'harga'=> $this->input->post('harga'),
                'stok'=> $this->input->post('stok')
            );
        $this->db->insert('table_obat', $data);
    }

    function save_transaksi_keluar($data){
         $this->db->insert('transaksi', $data);
    }
    
    function view(){
        $query = "SELECT * from table_obat";
        return $this->db->query($query);
    }

     function view_trans_masuk(){
        $query = "SELECT * from transaksi join table_pasien on transaksi.id_pasien = table_pasien.id_pasien
        join table_obat on transaksi.id_obat = table_obat.id_obat join table_dokter on transaksi.id_dokter =
        table_dokter.id_dokter  ";
        return $this->db->query($query);
    }
    
    function get_one($id){
        $query = "SELECT * from table_obat where id_obat ='$id'";
        return $this->db->query($query);
    }
    
    function edit(){
        $data = array(
                'nama_obat'=> $this->input->post('nama_obat'), 
                'harga'=> $this->input->post('harga'),
                'stok'=> $this->input->post('stok')
            );
        $this->db->where('id_obat', $this->input->post('id_obat'));
        $this->db->update('table_obat', $data);
    }

    function delete($id){
        $this->db->where('id_obat', $id);
        $this->db->delete('table_obat');
    }
    
    function cek_id($table,$where){		
            return $this->db->get_where($table,$where);
	}
}

