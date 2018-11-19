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
						'isLoggedIn' => true
					);
					$this->session->set_userdata( $sessionArray );
					if ( $res->user_role == 'admin' ) {
						redirect( 'admin/dashboard' );
					} else {
						redirect( $res->user_role.'/dashboard' );
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
}