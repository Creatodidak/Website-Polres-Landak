<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mintegritas extends CI_Model
{



    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by('no', 'ASC');
        return $this->db->get('pagudefinitif')->result();
    }
    
    
}
