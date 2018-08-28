<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator_status extends MY_Controller {

	public function change_operator_online_status(){
    // Load the needed models
		$this->load->model('operator_model');

    // Get the onlin status code from URI and convert it to integer
    $onlineStatusCode = (int)$this->uri->segment(3);

    // validation of data to be updated
    // value must be between 0-2
    if($onlineStatusCode >= 0 && $onlineStatusCode <= 2){
      $this->operator_model->set_operator_online_status($this->tank_auth->get_user_id(), $onlineStatusCode);
    }
		redirect('dashboard_overview');
	}

  public function is_there_online_operators(){
    // Load the needed models
		$this->load->model('operator_model');

    if($this->operator_model->is_there_online_operators()){
      echo 1;
      return TRUE;
    } else {
      echo 0;
      return FALSE;
    }
  }

}
