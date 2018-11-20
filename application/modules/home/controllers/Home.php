<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('home_model');
	}
	public function index() {
		$data['content_view'] = 'home/content';
		$this->templates->call_template($data);
	}
	public function login(){
		$data['content_view'] = 'home/login_view';
		$this->templates->call_template($data);
	}
	public function login_form(){
		if($this->input->post('submit')){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->home_model->loginMe($username, $password);
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
				redirect('login');
			}
		}
	}
}