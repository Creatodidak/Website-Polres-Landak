<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
      public function __construct(){
            parent::__construct();
      $this->load->model('Mblog');
      $this->load->model('Mkategoriblog');
      
      
      }



      public function index(){    
            $d['kategori'] = $this->Mkategoriblog->data();  
            $d['berita'] = $this->Mblog->newblog();
            $d['bacaberita']= $this->Mblog->getblog($this->uri->segment(3));
            $this->load->view('berita', $d);
      }

      public function read(){      
            $d['kategori'] = $this->Mkategoriblog->data();  
            $d['bacaberita']= $this->Mblog->getblog($this->uri->segment(3));
            $this->load->view('bacaberita', $d);
      }


}
