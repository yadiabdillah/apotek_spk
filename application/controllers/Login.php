<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('v_login');
	}
        
        function admin(){
		$this->load->view('v_login_superadmin');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
               // $jabatan = $this->input->post('jabatan');
		$where = array(
			'username' => $username,
			'password' => $password,
                      //  'jabatan' => $jabatan
			);
		$cek = $this->m_login->cek_login("table_user",$where)->num_rows();
		if($cek > 0){
                    $data = $this->m_login->get_one("table_user",$where)->row_array();
			$data_session = array(
                                'id' => $data['id'],
                                'nama' => $data['nama'],
				'username' => $username,
				'status' => "login",
                                'jabatan' => $jabatan
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/welcome"));
 
		}else{
                    echo '<script>alert("Maaf Username, password atau level anda tidak sesuai!!");</script>';
                    $this->load->view('v_login');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}
}