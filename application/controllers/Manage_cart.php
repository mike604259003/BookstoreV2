<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_cart extends CI_Controller {

	public function __construct() {
			parent::__construct();
			$this->load->helper('url');
			}

	public function index()
	{
		$this->load->view("");
			
    }
    
    public function addcart(){
        $product = array(

            'id' => '001',
            
            'name' => 'Java Programming',
            
            'price' => 150.50,
            
            'qty' => 5
            
            );
            
            $this->cart->insert($product);
    }
    
    public function showcart(){
        $cart = $this->cart->contents();
        foreach($cart as $item){
            echo $item['rowid'];
            echo $item['id'];
            echo $item['name'];
            echo $item['price'];
            echo $item['qty'];
        }

    }

    public function updatecart(){
        $data = array(
            'rowid' => 'dc5c7986daef50c1e02ab09b442ee34f',
            'price' => 200
            
        );
            
        $this->cart->update($data);
    }

    public function deletecart(){
        $this->cart->destroy();
    }

}
