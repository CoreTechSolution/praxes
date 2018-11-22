<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class Home_model extends MY_Model {
	function __construct() {
		parent::__construct();
	}
	function loginMe($username, $password){
		$this->db->select('id,username,email,password,user_role,first_name,last_name, company_id');
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