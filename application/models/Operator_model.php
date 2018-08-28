<?php

class Operator_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  public function get_operator_online_status($userID){
    $query = $this->db->get_where('operator_online_status', array('user_id' => $userID));
    $onlineStatusRow = $query->row_array();

    if($onlineStatusRow) {
      return $onlineStatusRow['online_status'];
    } else {
      return FALSE;
    }
  }

  public function set_operator_online_status($userID, $newStatus){
    $this->db->where('user_id', $userID);
    return $this->db->update('operator_online_status', array('online_status' => $newStatus));
  }

  public function is_there_online_operators(){
    // Check if there is any operator online (status code 1)
    $query = $this->db->get_where('operator_online_status', array('online_status' => 1));
    if($query->row_array()){
      return TRUE;
    } else {
      return FALSE;
    }
  }
}
