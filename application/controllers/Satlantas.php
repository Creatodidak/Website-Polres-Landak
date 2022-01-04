<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satlantas extends CI_Controller {
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
            $this->template->satuan('satuan/satlantas/index',$d);
      }

      public function sim(){
             $d['menu']= $this->Mmenu->menuheader();
             $d['website']= $this->Mwebsite->identitas();
             $this->template->satuan('satuan/satlantas/sim',$d);
      }
       
      public function dikyasa(){
             $d['menu']= $this->Mmenu->menuheader();
             $d['website']= $this->Mwebsite->identitas();
             $this->template->satuan('satuan/satlantas/dikyasa',$d);
      }      
       }


?>