<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {
        function __construct() {
            parent::__construct();
            if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
            $this->load->model('model_dokter');
        }

	public function index()
	{
		$this->load->view('dokter/view');
	}
        
        function delete()
        {
            $id = $this->uri->segment(3);
            $this->model_dokter->delete($id);
            redirect('Dokter/view');
    }
        
        function View()
        {
        if(isset($_POST['submit'])){
           /* $id_vendor = $this->input->post('id_pasien');
            $where = array(
			'id_pasien' => $id_pasien
			);
            $cek = $this->model_pasien->cek_id("table_pasien",$where)->num_rows();
            if($cek > 0){
                    echo '<script>alert("Maaf ID pasien sudah ada!!");</script>';
 
		}else{
                    
		}
            
           */
        $this->model_dokter->save();
           }
            $data['record'] = $this->model_dokter->view();
            $this->load->view('Dokter/view', $data);
            
        }
        
        function edit()
        {
            if(isset($_POST['submit'])){
                $this->model_dokter->edit();
                redirect('Dokter/view');
            } else {
                $id = $this->uri->segment(3);
                $data['record'] = $this->model_dokter->get_one($id)->row_array();

                $this->load->view('Dokter/form_edit', $data);
            }
    }
        
}
