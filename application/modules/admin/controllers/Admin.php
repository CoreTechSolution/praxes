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
		$data['content_view'] = 'admin/roles_view';
		$this->load->view('admin/main_template_view', $data);
	}
}