<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
      public function __construct(){
            parent::__construct();
      $this->load->model('Mblog');
      
      
      }



      public function index(){      

            $d['berita'] = $this->Mblog->newblog();
            $d['beritahumas'] = $this->Mblog->humasnewblog();
            $this->load->view('index', $d);
      }


}
