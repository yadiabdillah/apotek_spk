<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {
        function __construct() {
            parent::__construct();
            if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
            $this->load->model('model_vendor');
        }

	public function index()
	{
		$this->load->view('vendor/view');
	}
        
        function delete()
        {
            $id = $this->uri->segment(3);
            $this->model_vendor->delete($id);
            redirect('Vendor/view');
    }
        
        function view()
        {
        if(isset($_POST['submit'])){
            $id_vendor = $this->input->post('id_vendor');
            $where = array(
			'id_vendor' => $id_vendor
			);
            $cek = $this->model_vendor->cek_id("table_vendor",$where)->num_rows();
            if($cek > 0){
                    echo '<script>alert("Maaf ID vendor sudah ada!!");</script>';
 
		}else{
                    $this->model_vendor->save();
		}
            
            }
            $data['record'] = $this->model_vendor->view();
            $this->load->view('vendor/view', $data);
            
        }
        
        function edit()
        {
            if(isset($_POST['submit'])){
                $this->model_vendor->edit();
                redirect('vendor/view');
            } else {
                $id = $this->uri->segment(3);
                $data['record'] = $this->model_vendor->get_one($id)->row_array();

                $this->load->view('vendor/form_edit', $data);
            }
    }
        
}
