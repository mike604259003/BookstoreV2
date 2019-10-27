<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		

		function _getallCategory(){
			$category['data'] = $this->db->get('category');
			return $category;
		}

 		

		function addcategory($cat_name){
			$this->db->query("insert into category (ca_name) values ('".$cat_name."')");

		} 

		function _getcategory($id){
			$this->db->where('ca_id', $id);
			$data['data']=$this->db->get('category');  
			return $data;
		}

		function _updatecategory($id,$name){
			$this->db->where('ca_id',$id)
			->set('ca_name',$name)
			->update('category');
		}

		function _deletecategory($id){
			$this->db->where('ca_id', $id);
			$this->db->delete('category');  
		}	


}



// 		function _update_user($name,$email,$id){
// 			$result = $this->db->where('id',$id)
// 								->set('name',$name)
// 								->set('email',$email)
// 								->update('users');
// 			return $result;
// 		}
// }

