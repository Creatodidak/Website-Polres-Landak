<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {
	public function login(){
		$this->db->where('username_admin',$this->input->post('username'));
		$this->db->where('password_admin',md5($this->input->post('password')));
		return $this->db->get('admin');
	}
}
