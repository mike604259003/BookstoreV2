<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
			parent::__construct();
			$this->load->helper('url');
			}

	public function index()
	{
		$this->load->view("view_add_booknew");
			
	}
	
	public function data_submitted(){ 
		$b_name =$this->input->post('b_name');
		$b_author = $this->input->post('b_author');
		$b_publisher= $this->input->post('b_publisher');
		$b_category = $this->input->post('b_category');
		$b_IBNS = $this->input->post('b_IBNS');
		$b_page = $this->input->post('b_page');
		$b_year =$this->input->post('b_year');
		$b_amount = $this->input->post('b_amount');
		$b_price = $this->input->post('b_price');
		//'b_img' => $this->input->file('b_img'),
		
		$data = array(
			'B_name' => $b_name,
			'B_price' => $b_price,
			'B_author' => $b_author,
			'B_publisher' => $b_publisher,
			'B_category_id' => $b_category,
			'B_ISBN' => $b_IBNS,
			'B_numberpage' => $b_page,
			'B_year' => $b_year,
			'B_amounta' =>$b_amount,
			//'B_pic' => '$b_img',
			
		);
	$this->Book->_form_insert_book($data);
	$this->load->view('view_add_booknew');
		
		
	}

	public function showAllBook(){
		$result = $this->Book->_getAllBook();
		$this->load->view('view_book',$result);
	}
}
