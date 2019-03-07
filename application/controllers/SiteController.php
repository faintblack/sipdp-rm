<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteController extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		
	}

	public function index(){
		//$this->load->view('welcome_message');
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->index();
		} else {
			$this->login();
		}
	}

	public function login(){
		$this->load->view('login');

		if ($this->input->post('btnLogin', TRUE)) {
			echo "cek data user";
		}

	}

	public function verification(){
		$data = array('username' => $this->input->post('username', TRUE), 'password' => $this->input->post('password', TRUE));
	}



}
