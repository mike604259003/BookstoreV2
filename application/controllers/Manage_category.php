<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_category extends CI_Controller {

	public function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('Category_model','category');
			
			}
			
	public function show_addcategory(){
		
		$this->load->view('view_addcategory');
	}


	public function insert_category(){
		$ca_name =$this->input->post('ca_name');
		
		

	$this->category->addcategory($ca_name);
	$result = $this->category->_getallCategory();
	$this->load->view('view_category',$result);
}

public function showAllcategory(){
	$result = $this->category->_getallCategory();
	$this->load->view('view_category',$result);
}

public function edit_category(){
	$category = $this->category->_getCategory($this->input->get('ca_id'));
	$this->load->view('view_editcategory',$category);
	

	
}



// public function index(){
// 	$this->input->set_cookie('username','somchai','60');
// 	$this->session->set_userdata('member_id',45);
// }

public function updatecategory(){
		$ca_id = $this->input->get('ca_id');
		$ca_name =$this->input->post('ca_name');
		

		$this->category->_updatecategory($ca_id,$ca_name);
		$result = $this->category->_getallCategory();
		$this->load->view('view_category',$result);
}

public function deletecategory(){
	$this->category->_deletecategory($this->input->get('ca_id'));
	$result = $this->category->_getallCategory();
	$this->load->view('view_category',$result);
}



}
?>