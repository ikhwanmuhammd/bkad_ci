<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		// $data = $this->user_model->ambil_data($this->session->userdata ['username']);
		// $data = array(
		// 	'username'	=> $data->username,
		// 	'level' 	=> $data->level,
		// );

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/v_dashboard');
		$this->load->view('templates_administrator/footer');
	}
}
