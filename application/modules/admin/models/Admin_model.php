<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class Admin_model extends MY_Model {
	function __construct() {
		parent::__construct();
	}
	function loginMe($username, $password){
		$this->db->select('id,username,email,password,user_role,first_name,last_name');
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
	function add_user($username, $email_address, $password, $first_name, $last_name, $phone, $license_numbers, $npi_number, $street_address, $city, $state, $zip_code, $user_role){
		$data = array(
			'username'          => $username,
			'email'             => $email_address,
			'password'          => $password,
			'first_name'        => $first_name,
			'last_name'         => $last_name,
			'phone'             => $phone,
			'license_numbers'   => $license_numbers,
			'npi_number'        => $npi_number,
			'street_address'    => $street_address,
			'city'              => $city,
			'state'             => $state,
			'zip_code'          => $zip_code,
			'user_role'         => $user_role,
			'status'            => 1,
		);
		$this->db->insert('users',$data);
		$user_id = $this->db->insert_id();
		return $user_id;
	}
	function get_all_users(){
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
	function delete_user($user_id){
		$this->db->where('id', $user_id);
		$this->db->delete('users');
	}
	function get_user_by_id($user_id){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id', $user_id);

		if($query = $this->db->get()) {
			return $query->result_array();
		} else {
			return false;
		}
	}
	function update_user($user_id, $password, $first_name, $last_name, $phone, $license_numbers, $npi_number, $street_address, $city, $state, $zip_code, $user_role){
		$data = array(
			'first_name'        => $first_name,
			'last_name'         => $last_name,
			'phone'             => $phone,
			'license_numbers'   => $license_numbers,
			'npi_number'        => $npi_number,
			'street_address'    => $street_address,
			'city'              => $city,
			'state'             => $state,
			'zip_code'          => $zip_code,
			'user_role'         => $user_role,
		);

		$this->db->where('id', $user_id);
		$this->db->update('users', $data);

		if(!empty($password)){
			$this->db->set('password', $password);
			$this->db->where('id', $user_id);
			$this->db->update('users');
		}
	}
}