<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_admin_login extends CI_Controller {

	function __construct() {
        parent::__construct();

        $this->load->model("m_model");
        $this->load->database('books');
        if($this->session->userdata('user')==""){
        	redirect("home_admin");
        }

    }

	function index(){
		$data['books'] =  $this->m_model->tampil_data_all('books')->result();
		$data['data'] = $this->m_model->tampil_data('books','id_book','x')->result();
		$this->load->view("admin_home", $data);
	}

	function logout_admin(){
		$this->session->unset_userdata('user');
		redirect(base_url()."home_admin");
	}

	function insert_barang(){
		$title = $this->input->post('title');
		$author = $this->input->post('author');
		$date_published = $this->input->post('date_published');
		$number_page = $this->input->post('number_page');
		$type = $this->input->post('type');

		$data = array(
        'title'=>$title,
        'author'=>$author,
        'date_published'=>$date_published,
        'number_page'=>$number_page,
        'type'=>$type,
    	);
    $this->m_model->insertData('books',$data);
    redirect('home_admin_login');
	}
	
	function delete_barang(){
		$id =  $this->uri->segment(3);
    	$where = array(
    	'id_book' => $id
    	);

		$this->m_model->deleteData("books",$where);
		redirect('home_admin_login');
	}

	function update_barang(){
		$id =  $this->uri->segment(3);

		$where=array('id_book'=>$id);

		$aa['data'] = $this->m_model->tampil_data('books',$where)->result();
		$aa['books'] =  $this->m_model->tampil_data_all('books')->result();
		$this->load->view('admin_home',$aa);
	}

	function process_update_barang(){
		$id_book = $this->input->post('id_book');
		$title = $this->input->post('title');
		$author = $this->input->post('author');
		$date_published = $this->input->post('date_published');
		$number_page = $this->input->post('number_page');
		$type = $this->input->post('type');
		$data = array(
			'id_book'=>$id_book,
	        'title'=>$title,
	        'author'=>$author,
	        'date_published'=>$date_published,
	        'number_page'=>$number_page,
	        'type'=>$type,
    	 );
		$where = array(
			'id_book'=>$id_book
			);
		$this->m_model->updateData('books',$data,$where);
		redirect('home_admin_login');
	}


}
?>