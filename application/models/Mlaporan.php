<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mlaporan extends CI_Model
{



    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->where('time >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
        $this->db->order_by('id', 'desc');
        return $this->db->get('laphar')->result();
    }

    function get_blog()
    {   
        $this->db->where('tglinput_blog >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('tglinput_blog <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
        $this->db->order_by('id_blog', 'desc');
        return $this->db->get('blog')->result();
    }

    
}
