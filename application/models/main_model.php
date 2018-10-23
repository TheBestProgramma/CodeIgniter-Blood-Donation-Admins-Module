<?php


class main_model extends CI_CONTROLLER{

public function register_user($user_name,$email,$password,$confirm_password,$access_level){
	$query="INSERT INTO users VALUES('','$user_name','$email','$password','$confirm_password')";
	$this->db->query($query);

}
}
?>