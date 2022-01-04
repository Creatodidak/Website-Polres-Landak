<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satreskrim extends CI_Controller {
      public function __construct(){
            parent::__construct();
            $this->load->library('template');
            $this->load->library('pagination');
            $this->load->model('Mwebsite');
             $this->load->model('Mmenu');
            $this->load->model('Msubmenu');
            
            include APPPATH.'views/tool/function.php';
      }
      public function index(){
             $d['menu']= $this->Mmenu->menuheader();
             $d['website']= $this->Mwebsite->identitas();
            $this->template->satuan('satuan/satreskrim/index',$d);
      }

      public function sp2hp(){
             $d['menu']= $this->Mmenu->menuheader();
             $d['website']= $this->Mwebsite->identitas();
      
             $keyword = $this->input->post('keyword');
      if (isset($keyword)) {       
                  $this->db->like('kode',$keyword);
                  $d['sp2hp'] = $this->db->get('sp2hp')->result();
      }
      
             $this->template->satuan('satuan/satreskrim/sp2hp',$d);
      }
     
       }


?>