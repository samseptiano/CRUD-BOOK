<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database("admin");
        $this->load->model("m_model");

        if($this->session->userdata('user')!=""){
        	redirect("home_admin_login");
        }
    }

	public function index()
	{
		$this->load->view('admin');
	}

	public function login()
	{
		$user = $this->input->post("username");
		$pass = $this->input->post("password");

		$where = array(
			'username' => $user,
			'password' => $pass 
			);
		$cek = $this->m_model->tampil_data('admin',$where)->num_rows();

		if($cek >= 1){
			$this->session->set_userdata('user', $user);
			redirect(base_url()."home_admin_login");
		}
		else{
			redirect('home_admin');
		}
	}

}
?>