<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
        function __construct() {
            parent::__construct();
            if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
            $this->load->model('model_obat');
            $this->load->model('model_pasien');
            $this->load->model('model_dokter');
            $this->load->model('model_vendor');
            $this->load->library('cart');
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
        
        function view_masuk()
        {
        if(isset($_POST['submit'])){
            
                      $tgl = date('Y-m-d');
                              $data  = array('id_obat' => $this->input->post('id_obat') ,
                                'id_pasien' => $this->input->post('id_pasien'),
                                'id_dokter' => $this->input->post('id_dokter'),
                                'tgl_transaksi' =>$tgl ,
                                'tipe_pasien' =>$this->input->post('tipe_pasien'), 
                                'jumlah_transaksi' =>$this->input->post('jumlah') );
                    $this->model_obat->save_transaksi_keluar($data);
                    redirect('transaksi/view_masuk');
		
            
            }else{
              $data['pasien'] = $this->model_pasien->view()->result_array();
              $data['dokter'] = $this->model_dokter->view()->result_array();
            $data['obat'] = $this->model_obat->view()->result_array();
            $data['record'] = $this->model_obat->view_trans_masuk();
            $this->load->view('obat_masuk/view', $data);
            
        
                }
            }

         function view_trans_masuk()
        {
        if(isset($_POST['submit'])){
            
                      $tgl = date('Y-m-d');
                              $data  = array('id_obat' => $this->input->post('id_obat') ,
                                'id_vendor' => $this->input->post('id_pasien'),
                                'id_dokter' => $this->input->post('id_dokter'),
                                'tgl_transaksi' =>$tgl ,
                                'tgl_kadaluarsa' =>$this->input->post('tgl_kadaluarsa'), 
                                'jumlah' =>$this->input->post('jumlah') );
                    $this->model_obat->save_transaksi_masuk($data);
                    redirect('transaksi/view_trans_masuk');
        
            
            }else{
                $data['vendor'] = $this->model_vendor->view()->result_array();
             $data['obat'] = $this->model_obat->view()->result_array();
            $data['record'] = $this->model_obat->view_trans_masuk();
            $this->load->view('transaksi_masuk/view', $data);
            
        
                }
            }

        function tambah_obat_masuk(){
            if (isset($_POST['tambah_cart'])) {
                echo "hjskhhkkhkhk";
            }else{
           $data['pasien'] = $this->model_pasien->view()->result_array();
            $data['dokter'] = $this->model_dokter->view()->result_array();
            $data['obat'] = $this->model_obat->view()->result_array();
          //  print_r($data);exit();
            $this->load->view('obat_masuk/obat_masuk',$data);
            }
        }

        function tambah_masuk(){
            if (isset($_POST['tambah_cart'])) {
                //echo "hjskhhkkhkhk";
                $tgl = date('Y-m-d');
                $data  = array('id_obat' => $this->input->post('id_obat') ,
                                'id_pasien' => $this->input->post('id_pasien'),
                                'id_dokter' => $this->input->post('id_dokter'),
                                'tgl_transaksi' =>$tgl ,
                                'id_tipe_transaksi' =>2 ,
                                'jumlah' =>$this->input->post('jumlah') );
               $tes = $this->cart->insert($data);
                 $this->cart->contents();
                if ($tes) {
                    echo "berhasil";
                }else{
                    echo "gagal";
                }
                print_r($tes);
            }else{
                echo "data ga masuk coix";
            }

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
