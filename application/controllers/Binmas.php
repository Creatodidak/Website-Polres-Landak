<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Binmas extends CI_Controller {
      public function __construct(){
            parent::__construct();
            $this->load->library('template');
            $this->load->library('pagination');
            $this->load->library('rupiah');
            $this->load->model('Mwebsite');
             $this->load->model('Mmenu');
            $this->load->model('Msubmenu');
            $this->load->model('Mintegritas');
            
            include APPPATH.'views/tool/function.php';
      }
      public function bhabinkamtibmas(){
        $d['menu']= $this->Mmenu->menuheader();
        $d['website']= $this->Mwebsite->identitas();
        $d['pagu']= $this->Mintegritas->get_all();
       $this->template->satuan('satuan/binmas/bhabinkamtibmas',$d);
 }


      


     
       }


?>