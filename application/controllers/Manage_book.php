<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_book extends CI_Controller {

	public function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('Book_model','Book');
			$this->load->helper('cookie');
			}
			
	public function show_addbook(){
		$category = $this->Book->_getCategory();
		$this->load->view('view_managebook',$category);
	}


	public function insert_book(){
		$b_name =$this->input->post('b_name');
		$b_author = $this->input->post('b_author');
		$b_publisher= $this->input->post('b_publisher');
		$b_category = $this->input->post('b_category');
		$b_IBNS = $this->input->post('b_IBNS');
		$b_page = $this->input->post('b_page');
		$b_year =$this->input->post('b_year');
		$b_amount = $this->input->post('b_amount');
		$b_price = $this->input->post('b_price');
		$pic= "";
		

	$this->Book->addbooks($b_name,$b_price,$b_author,$b_publisher,$b_category,$b_IBNS,$b_page,$b_year,$b_amount,$pic);
	$this->load->view('view_book');
}

public function showAllBook(){
	$result = $this->Book->_getAllBook();
	$this->load->view('view_book',$result);
}

public function edit_book(){
	$category['data1'] = $this->Book->_getCategory();
	$this->load->view('view_editbook',$category);
	$result['data2'] = $this->Book->_getBook($this->input->get('B_ID'));
	$this->load->view('view_editbook',$result);

	
}

public function showcookie(){
	
	echo get_cookie('username');

}

public function showsession(){
	$member_id = $this->session->userdata("member_id");
	echo $member_id;
	$this->session->unset_userdata('member_id');
}

// public function index(){
// 	$this->input->set_cookie('username','somchai','60');
// 	$this->session->set_userdata('member_id',45);
// }

public function updateBook(){
		$b_name =$this->input->post('b_name');
		$b_author = $this->input->post('b_author');
		$b_publisher= $this->input->post('b_publisher');
		$b_category = $this->input->post('b_category');
		$b_IBNS = $this->input->post('b_IBNS');
		$b_page = $this->input->post('b_page');
		$b_year =$this->input->post('b_year');
		$b_amount = $this->input->post('b_amount');
		$b_price = $this->input->post('b_price');

		$this->Book->_updateBook($b_name,$b_price,$b_author,$b_publisher,$b_category,$b_IBNS,$b_page,$b_year,$b_amount);
		$this->load->view('view_book');
}

public function deleteBook(){
	$this->Book->_deleteBook($this->input->get('B_ID'));
	$this->load->view('view_book');
}



}
?>