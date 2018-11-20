<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('users_model');
	}
	public function index() {
		is_login();
		redirect(base_url('users/dashboard'));
	}
	public function dashboard(){
		is_login();
		$data['html_title'] = 'Dashboard';
		$data['page_title'] = 'Dashboard';
		$data['content_view'] = 'users/dashboard_view';
		$this->load->view('users/main_template_view', $data);
	}
}