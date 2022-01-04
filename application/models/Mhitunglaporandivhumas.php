<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mhitunglaporandivhumas extends CI_Model
{



    function __construct()
    {
        parent::__construct();
    }


    function hitunglaporandivhumas()
    {   $this->db->where('time >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
        $query = $this->db->get('laphardivhumas');
      
        if($query->num_rows()>0)
        {
        return $query->num_rows(). ' berita';
        }
        else
        {
        return nihil;
        }
    }

    function hitunglaporan()
    {   $this->db->where('time >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
        $query = $this->db->get('laphardivhumas');
      
        if($query->num_rows()>0)
        {
        return $query->num_rows(). ' berita';
        }
        else
        {
        return nihil;
        }
      }
    
function polreslandak()
    {
        $satuan = 'Humas Polres Landak';
        $this->db->where('time >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
        $this->db->where('satuan', $satuan);
        $query = $this->db->get('laphardivhumas');
      
        if($query->num_rows()>0)
        {
        return $query->num_rows(). ' berita';
        }
        else
        {
        return nihil;
        }
    }

    function polsekngabang()
    {
        $satuan = 'Polsek Ngabang';
        $this->db->where('time >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
      $query = $this->db->get('laphardivhumas');
      
        if($query->num_rows()>0)
        {
        return $query->num_rows(). ' berita';
        }
        else
        {
        return nihil;
        }
    }

    function polsekairbesar()
    {
        $satuan= 'Polsek Air Besar';
        $this->db->where('time >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
      $query = $this->db->get('laphardivhumas');
      
        if($query->num_rows()>0)
        {
        return $query->num_rows(). ' berita';
        }
        else
        {
        return nihil;
        }
    }

    function polsekkualabehe()
    {
        $satuan = 'Polsek Kuala Behe';
        $this->db->where('time >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
      $query = $this->db->get('laphardivhumas');
      
        if($query->num_rows()>0)
        {
        return $query->num_rows(). ' berita';
        }
        else
        {
        return nihil;
        }
    }

    function polseksengahtemila()
    {
        $satuan = 'Polsek Sengah Temila';
        $this->db->where('time >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
      $query = $this->db->get('laphardivhumas');
      
        if($query->num_rows()>0)
        {
        return $query->num_rows(). ' berita';
        }
        else
        {
        return nihil;
        }
    }
    
    function polsekmenyuke()
    {
        $satuan = 'Polsek Menyuke';
        $this->db->where('time >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
      $query = $this->db->get('laphardivhumas');
      
        if($query->num_rows()>0)
        {
        return $query->num_rows(). ' berita';
        }
        else
        {
        return nihil;
        }
    }
    
    function polseksebangki()
    {
        $satuan = 'Polsek Sebangki';
        $this->db->where('time >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
      $query = $this->db->get('laphardivhumas');
      
        if($query->num_rows()>0)
        {
        return $query->num_rows(). ' berita';
        }
        else
        {
        return nihil;
        }
    }
    
    function polsekmeranti()
    {
        $satuan = 'Polsek Meranti';
        $this->db->where('time >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
      $query = $this->db->get('laphardivhumas');
      
        if($query->num_rows()>0)
        {
        return $query->num_rows(). ' berita';
        }
        else
        {
        return nihil;
        }
    }
    
    function polsekmandor()
    {
        $satuan = 'Polsek Mandor';
        $this->db->where('time >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
      $query = $this->db->get('laphardivhumas');
      
        if($query->num_rows()>0)
        {
        return $query->num_rows(). ' berita';
        }
        else
        {
        return nihil;
        }
    }
    
    function polsekmempawahhulu()
    {
        $satuan = 'Polsek Mempawah Hulu';
        $this->db->where('time >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
      $query = $this->db->get('laphardivhumas');
      
        if($query->num_rows()>0)
        {
        return $query->num_rows(). ' berita';
        }
        else
        {
        return nihil;
        }
    }
    
    function polsekmenjalin()
    {
        $satuan = 'Polsek Menjalin';
        $this->db->where('time >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
        $this->db->where('satuan', $satuan);
        $this->db->order_by('id', 'ASC');
      $query = $this->db->get('laphardivhumas');
      
        if($query->num_rows()>0)
        {
        return $query->num_rows(). ' berita';
        }
        else
        {
        return nihil;
        }
    }  

    
}
