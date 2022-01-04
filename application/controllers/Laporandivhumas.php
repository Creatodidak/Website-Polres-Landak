<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Laporandivhumas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mlaporandivhumas');
    }
}
