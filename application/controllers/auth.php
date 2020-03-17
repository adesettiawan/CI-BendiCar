<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {
	public function index()
	{
        $this->load->model('m_login');
        $this->load->view('login');
            
    }
    function aksi_login(){
		$this->load->model('m_login');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("login",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "auth"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("penyewa"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
