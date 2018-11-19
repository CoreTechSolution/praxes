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
	function add_role($role_name, $role_slug){
		$data = array(
			'role_name'     => $role_name,
			'role_slug'          => $role_slug,
		);
		$this->db->insert('roles',$data);
		$role_id = $this->db->insert_id();
		return $role_id;
	}
	function get_roles(){
		$this->db->select('*');
		$this->db->from('roles');

		if($query = $this->db->get()) {
			return $query->result_array();
		} else {
			return false;
		}
	}
	function delete_role($role_id){
		$this->db->where('role_id', $role_id);
		$this->db->delete('roles');
	}
	function get_companies(){
		$this->db->select('*');
		$this->db->from('companies');

		if($query = $this->db->get()) {
			return $query->result_array();
		} else {
			return false;
		}
	}
	function add_company($company_name, $company_slug){
		$data = array(
			'company_name'     => $company_name,
			'company_slug'     => $company_slug,
		);
		$this->db->insert('companies',$data);
		$company_id = $this->db->insert_id();
		return $company_id;
	}
	function delete_company($company_id){
		$this->db->where('company_id', $company_id);
		$this->db->delete('companies');
	}
}