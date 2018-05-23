<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_barang extends CI_Controller {

	function __construct() {
        parent::__construct();
        if($this->session->userdata('user')==""){
        	redirect("home_admin");
        }

    }

	//LOAD VIEW
	 function index()
	{

		$this->load->view("edit-barang");

	}

}
?>