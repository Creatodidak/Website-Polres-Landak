<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mcounter extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function cek() {
            
            $ip = @$_SERVER['REMOTE_ADDR'];
            $device = @$_SERVER[HTTP_USER_AGENT];
            $dat = date('Y-m-d');
            $id = $this->uri->segment(3);

            $this->db->where('ipaddress', $ip);
            $this->db->where('time', $dat);
            $this->db->where('postid', $id);
            $this->db->where('device', $device);
            return $this->db->get('counter');
    }
            

    public function tambah() {
        $ip = @$_SERVER['REMOTE_ADDR'];
        $device = @$_SERVER[HTTP_USER_AGENT];
        $dat = date('Y-m-d');
        $id = $this->uri->segment(3);

        $data = array(
            'ipaddress' => $ip,
            'device' => $device,
            'time' => $dat,
            'postid' => $id
    );
    
   return $this->db->insert('counter', $data);
   
    }
    public function update() {
        $ip = @$_SERVER['REMOTE_ADDR'];
        $device = @$_SERVER[HTTP_USER_AGENT];
        $dat = date('Y-m-d');
        $id = $this->uri->segment(3);

        $data = array(
            'ipaddress' => $ip,
            'device' => $device,
            'time' => $dat,
            'postid' => $id
    );
    $this->db->where('ipaddress', $ip);
    $this->db->where('time', $dat);
    $this->db->where('postid', $id);
    $this->db->where('device', $device);
   return $this->db->update('counter', $data);
   
    }
}