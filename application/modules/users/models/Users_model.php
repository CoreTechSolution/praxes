<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
class Users_model extends MY_Model {
	function __construct() {
		parent::__construct();
	}
	function get_all_company_users($user_id, $company_id){
		$this->db->select('*');
		$this->db->from('users');
		//$where = "id NOT IN (1, $user_id)";
		$where = "id NOT IN (1, $user_id) AND company_id IN ($company_id)";
		$this->db->where($where);

		if($query = $this->db->get()) {
			return $query->result_array();
			//return $company_id;
		} else {
			return false;
		}
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
	function add_user($username, $email_address, $password, $first_name, $last_name, $phone, $license_numbers, $npi_number, $street_address, $city, $state, $zip_code, $user_role, $company_id){
		$this->db->select('company_name');
		$this->db->from('companies');
		$this->db->where('company_id', $company_id);
		if($query = $this->db->get()){
			foreach ($query->result() as $row){
				$company_name = $row->company_name;
			}
		}

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
			'company_id'         => $company_id,
			'company_name'         => $company_name,
			'status'            => 1,
		);
		$this->db->insert('users',$data);
		$user_id = $this->db->insert_id();
		return $user_id;
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
	function delete_user($user_id){
		$this->db->where('id', $user_id);
		$this->db->delete('users');
	}
}