<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class Users_model extends MY_Model {
	function __construct() {
		parent::__construct();
	}
	function get_all_users(){
		//$user_id = $this->session->userdata('user_id');
		$this->db->select('*');
		$this->db->from('users');
		$where = "id!=1";
		$this->db->where($where);

		if($query = $this->db->get()) {
			return $query->result_array();
		} else {
			return false;
		}
	}
}