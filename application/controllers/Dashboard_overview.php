<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_overview extends MY_Controller {

	public function index()
	{
		// Load the needed models
		$this->load->model('user_model');
		$this->load->model('operator_model');

		// Get user ID and user name from session variables via Tank_auth library
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();

		// check is user in admin group
		$data['isAdmin'] = $this->user_model->is_user_admin($this->tank_auth->get_user_id());

		// get the operator onlin status
		$data['operatorOnlineStatus'] = $this->operator_model->get_operator_online_status($this->tank_auth->get_user_id());

		// test online operators check
		$data['operatorsOnline'] = $this->operator_model->is_there_online_operators();
		// Load views
		$this->load->view('templates/header');

		// if user is admin then load admin version of Dashboard overview page
		if($data['isAdmin']) {
			$this->load->view('dashboard_overview_admin', $data);
		}
		else {
			$this->load->view('dashboard_overview_operator', $data);
		}

		$this->load->view('templates/footer');
	}

}
