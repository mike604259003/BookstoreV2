<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
        }
        

        public function checkLogin($user,$pass){

            session_start();
            $passencode = sha1(md5($pass));

            
            $this->db->where('UC_username', $user);
            $this->db->where('UC_Password', $passencode);
            $data['data'] = $this->db->get('userinformation');
            
            $row = $data->row();

           
                $_SESSION["UC_ID"] = $row["UC_ID"];
                $_SESSION["UC_status"] = $row["UC_status"];

                session_write_close();

            if($row["UC_status"] == "ADMIN")
            {
                return true;
            }
            else
            {
                return false;
            }
        
            

        }

        

        public function register($user,$pass,$status,$name,$lname){
            $this->db->query("insert into userinformation (UC_username , UC_password , UC_status ) values ('".$user."','".$pass."','".$status."')");
            $this->db->where("UC_username",$user);
            $this->db->where("UC_password",$pass);
            $this->db->where("UC_status",$status);
            $query=$this->db->get("userinformation");
            $row = $query->result();
            $this->db->query("insert into customer (C_ID , C_Name , C_Lastname ) values ('".$row['UC_ID']."','".$name."','".$lname."')");
        
        }
}
?>