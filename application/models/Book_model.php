<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function _getUsers($id){
			//$this->db->select('name, email');
			// $result = $this->db->get('users');
			$result['result'] = $this->db->get_where('users', array('id' => $id));
			return $result;
		}

		function _getCategory(){
			$category['data'] = $this->db->get('category');
			return $category;
		}

 		function _queryUsers(){
			$query = $this->db->query("select * from users where id='3'");
 			return $query;
 		}	

		function _form_insert_book($data){	
            $this->db->insert('book',$data);
		}

		function _delete_user_id($id){
			$this->db->where('id', $id);
			$this->db->delete('users');  
		}	


		function _getAllBook(){
			$query['data'] = $this->db->get('book');
			return $query;
		}

		function addbooks($bname,$price,$author,$publisher,$category,$ISBN,$page,$year,$amount,$pic){
			$this->db->query("insert into book (B_name,B_Price,B_author,B_publisher,B_category_id,B_ISBN,B_numberpage,B_year,B_amounta,B_pic) values ('".$bname."','".$price."','".$author."','".$publisher."','".$category."','".$ISBN."','".$page."','".$year."','".$amount."','".$pic."') ");

		} 

		function _getBook($id){
			$this->db->where('B_ID', $id);
			$data['databook']=$this->db->get('book');  
			return $data;
		}

		function _updateBook(){

		}

		function _deleteBook($id){
			$this->db->where('B_ID', $id);
			$this->db->delete('book');  
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

