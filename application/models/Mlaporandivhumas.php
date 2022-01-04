<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mlaporandivhumas extends CI_Model
{



    function __construct()
    {
        parent::__construct();
    }
function polreslandak()
    {
        $satuan = 'Humas Polres Landak';
        $this->db->where('time', date("Y-m-d"));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('laphardivhumas')->result();
    }

    function polsekngabang()
    {
        $satuan = 'Polsek Ngabang';
        $this->db->where('time', date("Y-m-d"));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('laphardivhumas')->result();
    }

    function polsekairbesar()
    {
        $satuan= 'Polsek Air Besar';
        $this->db->where('time', date("Y-m-d"));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('laphardivhumas')->result();
    }

    function polsekkualabehe()
    {
        $satuan = 'Polsek Kuala Behe';
        $this->db->where('time', date("Y-m-d"));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('laphardivhumas')->result();
    }

    function polseksengahtemila()
    {
        $satuan = 'Polsek Sengah Temila';
        $this->db->where('time', date("Y-m-d"));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('laphardivhumas')->result();
    }
    
    function polsekmenyuke()
    {
        $satuan = 'Polsek Menyuke';
        $this->db->where('time', date("Y-m-d"));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('laphardivhumas')->result();
    }
    
    function polseksebangki()
    {
        $satuan = 'Polsek Sebangki';
        $this->db->where('time', date("Y-m-d"));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('laphardivhumas')->result();
    }
    
    function polsekmeranti()
    {
        $satuan = 'Polsek Meranti';
        $this->db->where('time', date("Y-m-d"));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('laphardivhumas')->result();
    }
    
    function polsekmandor()
    {
        $satuan = 'Polsek Mandor';
        $this->db->where('time', date("Y-m-d"));    
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('laphardivhumas')->result();
    }
    
    function polsekmempawahhulu()
    {
        $satuan = 'Polsek Mempawah Hulu';
        $this->db->where('time', date("Y-m-d"));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('laphardivhumas')->result();
    }
    
    function polsekmenjalin()
    {
        $satuan = 'Polsek Menjalin';
        $this->db->where('time', date("Y-m-d"));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('laphardivhumas')->result();
    }  

    
}
