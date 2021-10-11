<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
        function __construct() {
            parent::__construct();
            if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
            $this->load->model('model_user');
        }

	public function index()
	{
		$this->load->view('user/view');
	}
        
        function delete()
        {
            $id = $this->uri->segment(3);
            $this->model_user->delete($id);
            redirect('User/view');
    }
        
        function view()
        {
        if(isset($_POST['submit'])){
            $this->model_user->save();
            }
            $data['record'] = $this->model_user->view();
            $this->load->view('user/view', $data);
            
        }
        
        function edit()
        {
            if(isset($_POST['submit'])){
                $this->model_user->edit();
                redirect('user/view');
            } else {
                $id = $this->uri->segment(3);
                $data['record'] = $this->model_user->get_one($id)->row_array();

                $this->load->view('user/form_edit', $data);
            }
    }
    
    public function change_pass()
	{
            if(isset($_POST['submit'])){
                $this->model_user->change_pass();
                echo '<script>alert("Password diperbarui!!");</script>';
                $this->load->view('user/change_password');
            } else {
                $this->load->view('user/change_password');
            }
	}
        
    public function reset_pass(){
                $id = $this->uri->segment(3);
                $this->model_user->reset_pass($id);
                echo '<script>alert("Password diubah menjadi 12345 !!!");</script>';
                $data['record'] = $this->model_user->view();
                $this->load->view('user/view', $data);
	}
        
}
