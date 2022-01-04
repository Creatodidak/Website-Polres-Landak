<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mexport extends CI_Model
{



    function __construct()
    {
        parent::__construct();
    }

    // get all
    function getig()
    {
        return $this->db->get('instagram')->result();
    }

    function getfb()
    {
        return $this->db->get('facebook')->result();
    }

    function gettw()
    {
        return $this->db->get('twitter')->result();
    }

    
}
