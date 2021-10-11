<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
        function __construct() {
            parent::__construct();
            if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
            $this->load->model('model_pasien');
        }

	public function index()
	{
		$this->load->view('pasien/view');
	}
        
        function delete()
        {
            $id = $this->uri->segment(3);
            $this->model_pasien->delete($id);
            redirect('Pasien/view');
    }
        
      public  function view()
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
        $this->model_pasien->save();
           }
            $data['record'] = $this->model_pasien->view();
            $this->load->view('Pasien/view', $data);
            
        }
        
        function edit()
        {
            if(isset($_POST['submit'])){
                $this->model_pasien->edit();
                redirect('Pasien/view');
            } else {
                $id = $this->uri->segment(3);
                $data['record'] = $this->model_pasien->get_one($id)->row_array();

                $this->load->view('Pasien/form_edit', $data);
            }
    }
        
}
