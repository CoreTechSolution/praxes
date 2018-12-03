<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function index() {
		is_login();
		redirect(base_url('admin/dashboard'));
	}
	public function login(){
		$this->load->view('admin/admin_login_view');
	}
	public function admin_login_form(){
		if($this->input->post('submit')){
			$username = $this->input->post('username');
			$password = $this->input->post('pwd');
			$result = $this->admin_model->loginMe($username, $password);
			if(count($result) > 0) {
				foreach ( $result as $res ) {
					$sessionArray = array(
						'user_id'    => $res->id,
						'user_role'  => $res->user_role,
						'username'   => $res->username,
						'first_name'   => $res->first_name,
						'last_name'   => $res->last_name,
						'isLoggedIn' => true
					);
					$this->session->set_userdata( $sessionArray );
					if ( $res->user_role == 'admin' ) {
						redirect( 'admin/dashboard' );
					} else {
						redirect( 'users/dashboard' );
					}
				}
			} else {
				$this->session->set_flashdata(array('msg_type'=>'error','msg'=>'Username or password mismatch'));
				redirect('admin/login');
			}
		}
	}
	public function logout(){
		$CI = & get_instance();
		$CI->session->unset_userdata('user_id');
		$CI->session->unset_userdata('user_role');
		$CI->session->unset_userdata('username');
		$CI->session->unset_userdata('isLoggedIn');
		$CI->session->sess_destroy();
		redirect(base_url('admin/login'));
	}
	public function dashboard(){
		is_login();
		$data['html_title'] = 'Dashboard';
		$data['page_title'] = 'Dashboard';
		$data['content_view'] = 'admin/dashboard_view';
		$this->load->view('admin/main_template_view', $data);
	}
	public function roles(){
		is_login();
		$data['html_title'] = 'Roles';
		$data['page_title'] = 'Roles';
		$roles = $this->admin_model->get_roles();
		$data['roles'] = $roles;
		$data['content_view'] = 'admin/roles_view';
		$this->load->view('admin/main_template_view', $data);
	}
	public function add_role(){
		is_login();
		$data['html_title'] = 'Add Role';
		$data['page_title'] = 'Add Role';
		$data['content_view'] = 'admin/add_role_view';
		$this->load->view('admin/main_template_view', $data);
	}
	public function add_role_form(){
		if($this->input->post('submit')){
			$role_name = $this->input->post('role_name');
			$role_slug = slugify($role_name);
			$role_id = $this->admin_model->add_role($role_name, $role_slug);
			if(!empty($role_id)){
				redirect(base_url('admin/roles'));
			}
		}
	}
	public function edit_role(){
		is_login();
		$role_id = $this->input->get('id');
		$role_name = get_role_name_by_id($role_id);
		$data['html_title'] = 'Edit Role';
		$data['page_title'] = 'Edit Role';
		$data['role_id'] = $role_id;
		$data['role_name'] = $role_name;
		$data['content_view'] = 'admin/edit_role_view';
		$this->load->view('admin/main_template_view', $data);
	}
	public function edit_role_form(){
		if($this->input->post('submit')){
			$role_name = $this->input->post('role_name');
			$role_id = $this->input->post('role_id');
			$role_slug = slugify($role_name);
			$role_id = $this->admin_model->update_role($role_id, $role_name, $role_slug);
			redirect(base_url('admin/roles'));
		}
	}
	public function delete_role(){
		is_login();
		$role_id = $this->input->get('id');
		$this->admin_model->delete_role($role_id);
		redirect('admin/roles');
	}
	public function companies(){
		is_login();
		$data['html_title'] = 'Companies';
		$data['page_title'] = 'Companies';
		$companies = $this->admin_model->get_companies();
		$data['companies'] = $companies;
		$data['content_view'] = 'admin/companies_view';
		$this->load->view('admin/main_template_view', $data);
	}
	public function add_company(){
		is_login();
		$data['html_title'] = 'Add Company';
		$data['page_title'] = 'Add Company';
		$data['content_view'] = 'admin/add_company_view';
		$this->load->view('admin/main_template_view', $data);
	}
	public function add_company_form(){
		if($this->input->post('submit')){
			$company_name = $this->input->post('company_name');
			$company_slug = slugify($company_name);
			$company_id = $this->admin_model->add_company($company_name, $company_slug);
			if(!empty($company_id)){
				redirect(base_url('admin/companies'));
			}
		}
	}
	public function delete_company(){
		is_login();
		$company_id = $this->input->get('id');
		$this->admin_model->delete_company($company_id);
		redirect('admin/companies');
	}
	public function edit_company(){
		is_login();
		$company_id = $this->input->get('id');
		$company_name = get_company_name_by_id($company_id);
		$data['html_title'] = 'Edit Company';
		$data['page_title'] = 'Edit Company';
		$data['company_name'] = $company_name;
		$data['company_id'] = $company_id;
		$data['content_view'] = 'admin/edit_company_view';
		$this->load->view('admin/main_template_view', $data);
	}
	public function edit_company_form(){
		is_login();
		if($this->input->post('submit')){
			$company_id = $this->input->post('company_id');
			$company_name = $this->input->post('company_name');
			$company_slug = slugify($company_name);
			$this->admin_model->update_company($company_id, $company_name, $company_slug);
			redirect(base_url('admin/companies'));
		}
	}
	public function manage_users(){
		is_login();
		$data['html_title'] = 'Manage Users';
		$data['page_title'] = 'Manage Users';
		$users = $this->admin_model->get_all_users();
		$data['users'] = $users;
		$data['content_view'] = 'admin/manage_users_view';
		$this->load->view('admin/main_template_view', $data);
	}
	public function add_user(){
		is_login();
		$data['html_title'] = 'Add User';
		$data['page_title'] = 'Add User';
		$roles = $this->admin_model->get_roles();
		$data['roles'] = $roles;
		$companies = $this->admin_model->get_companies();
		$data['companies'] = $companies;
		$data['content_view'] = 'admin/add_user_view';
		$this->load->view('admin/main_template_view', $data);
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

			$user_id = $this->admin_model->add_user($username, $email_address, $password, $first_name, $last_name, $phone, $license_numbers, $npi_number, $street_address, $city, $state, $zip_code, $user_role, $company_id);
			if(!empty($user_id)){
				redirect(base_url('admin/manage-users'));
			}
		}
	}
	public function edit_user(){
		is_login();
		$data['html_title'] = 'Edit User';
		$data['page_title'] = 'Edit User';
		$roles = $this->admin_model->get_roles();
		$data['roles'] = $roles;
		$user_id = $this->input->get('id');
		$user_data = $this->admin_model->get_user_by_id($user_id);
		$data['user_data'] = $user_data;
		$companies = $this->admin_model->get_companies();
		$data['companies'] = $companies;
		$data['content_view'] = 'admin/edit_user_view';
		$this->load->view('admin/main_template_view', $data);
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
			$company_id = $this->input->post('company_id');

			$this->admin_model->update_user($user_id, $password, $first_name, $last_name, $phone, $license_numbers, $npi_number, $street_address, $city, $state, $zip_code, $user_role, $company_id);
			redirect(base_url('admin/manage-users'));
		}
	}
	public function delete_user(){
		is_login();
		$user_id = $this->input->get('id');
		$this->admin_model->delete_user($user_id);
		redirect(base_url('admin/manage-users'));
	}
}