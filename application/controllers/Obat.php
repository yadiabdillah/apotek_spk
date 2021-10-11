<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {
        function __construct() {
            parent::__construct();
            if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
            $this->load->model('model_obat');
        }

	public function index()
	{
		$this->load->view('obat/view');
	}
        
        function delete()
        {
            $id = $this->uri->segment(3);
            $this->model_obat->delete($id);
            redirect('Obat/view');
    }
        
        function view()
        {
        if(isset($_POST['submit'])){
            $id_obat = $this->input->post('id_obat');
            $where = array(
			'id_obat' => $id_obat
			);
            $cek = $this->model_obat->cek_id("table_obat",$where)->num_rows();
            if($cek > 0){
                    echo '<script>alert("Maaf ID obat sudah ada!!");</script>';
 
		}else{
                    $this->model_obat->save();
		}
            
            }
            $data['record'] = $this->model_obat->view();
            $this->load->view('obat/view', $data);
            
        }
        
        function edit()
        {
            if(isset($_POST['submit'])){
                $this->model_obat->edit();
                redirect('obat/view');
            } else {
                $id = $this->uri->segment(3);
                $data['record'] = $this->model_obat->get_one($id)->row_array();

                $this->load->view('obat/form_edit', $data);
            }
    }
        
}
