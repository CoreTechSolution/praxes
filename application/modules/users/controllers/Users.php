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
		$user_id = $this->session->userdata('user_id');
		$data['user_role'] = $this->session->userdata('user_role');
		$data['userdata'] = get_userdata_by_id($user_id);
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
}