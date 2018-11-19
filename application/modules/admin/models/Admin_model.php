<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class Admin_model extends MY_Model {
	function __construct() {
		parent::__construct();
	}

	function loginMe($username, $password){
		$this->db->select('id,username,email,password,user_role');
		$this->db->from('users');
		$this->db->where('username', $username);

		$query = $this->db->get();
		$user = $query->result();
		if(!empty($user)){
			if(verifyHashedPassword($password, $user[0]->password)){
				return $user;
			} else {
				return array();
			}
		} else {
			return array();
		}
	}
}