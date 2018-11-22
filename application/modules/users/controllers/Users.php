<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('users_model');
	}
	public function index() {
		is_user_login();
		redirect(base_url('users/dashboard'));
	}
	public function dashboard(){
		is_user_login();
		$data['html_title'] = 'Dashboard';
		$data['page_title'] = 'Dashboard';
		$data['username'] = $this->session->userdata('username');
		$data['content_view'] = 'users/dashboard_view';
		$this->load->view('users/main_template_view', $data);
	}
	public function logout(){
		$CI = & get_instance();
		$CI->session->unset_userdata('user_id');
		$CI->session->unset_userdata('user_role');
		$CI->session->unset_userdata('username');
		$CI->session->unset_userdata('isLoggedIn');
		$CI->session->sess_destroy();
		redirect(base_url('login'));
	}
	public function manage_staff(){
		is_login();
		$data['html_title'] = 'Manage Staff';
		$data['page_title'] = 'Manage Staff';
		$user_id = $this->session->userdata('user_id');
		$data['username'] = $this->session->userdata('username');
		$company_id = $this->session->userdata('company_id');
		$users = $this->users_model->get_all_company_users($user_id, $company_id);
		$data['users'] = $users;
		$data['content_view'] = 'users/manage_users_view';
		$this->load->view('users/main_template_view', $data);
	}
	public function add_user(){
		is_login();
		$data['html_title'] = 'Add User';
		$data['page_title'] = 'Add User';
		$roles = $this->users_model->get_roles();
		$data['roles'] = $roles;
		$data['username'] = $this->session->userdata('username');
		$company_id = $this->session->userdata('company_id');
		$data['company_id'] = $company_id;
		$data['content_view'] = 'users/add_user_view';
		$this->load->view('users/main_template_view', $data);
	}
	public function add_user_form(){
		if($this->input->post('submit')){
			$username = $this->input->post('username');
			$email_address = $this->input->post('email_address');
			$password = getHashedPassword($this->input->post('password'));
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$phone = $this->input->post('phone');
			$license_numbers = $this->input->post('license_numbers');
			$npi_number = $this->input->post('npi_number');
			$street_address = $this->input->post('street_address');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
			$zip_code = $this->input->post('zip_code');
			$user_role = $this->input->post('user_role');
			$company_id = $this->input->post('company_id');
			$data['username'] = $this->session->userdata('username');

			$user_id = $this->users_model->add_user($username, $email_address, $password, $first_name, $last_name, $phone, $license_numbers, $npi_number, $street_address, $city, $state, $zip_code, $user_role, $company_id);
			if(!empty($user_id)){
				redirect(base_url('users/manage-staff'));
			}
		}
	}
	public function edit_user(){
		is_login();
		$data['html_title'] = 'Edit User';
		$data['page_title'] = 'Edit User';
		$roles = $this->users_model->get_roles();
		$data['roles'] = $roles;
		$user_id = $this->input->get('id');
		$user_data = $this->users_model->get_user_by_id($user_id);
		$data['user_data'] = $user_data;
		$data['username'] = $this->session->userdata('username');
		$data['content_view'] = 'users/edit_user_view';
		$this->load->view('users/main_template_view', $data);
	}
	public function edit_user_form(){
		if($this->input->post('submit')){

			$user_id = $this->input->post('user_id');
			if(!empty($this->input->post('password'))){
				$password = getHashedPassword($this->input->post('password'));
			}
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$phone = $this->input->post('phone');
			$license_numbers = $this->input->post('license_numbers');
			$npi_number = $this->input->post('npi_number');
			$street_address = $this->input->post('street_address');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
			$zip_code = $this->input->post('zip_code');
			$user_role = $this->input->post('user_role');
			//$company_id = $this->input->post('company_id');
			$data['username'] = $this->session->userdata('username');

			$this->users_model->update_user($user_id, $password, $first_name, $last_name, $phone, $license_numbers, $npi_number, $street_address, $city, $state, $zip_code, $user_role);
			redirect(base_url('users/manage-staff'));
		}
	}
	public function delete_user(){
		is_login();
		$user_id = $this->input->get('id');
		$this->users_model->delete_user($user_id);
		redirect(base_url('users/manage-staff'));
	}
}