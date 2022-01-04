<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mreview extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

    public function reviewblog()
    {
        $this->db->where('tglinput_blog  >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('tglinput_blog  <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
		$this->db->where('publish', $this->session->userdata('satuan'));
		$this->db->order_by('tglinput_blog','desc');
		return $this->db->get('blog');
    }

    public function reviewmedon()
    {
        $this->db->where('time  >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time  <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
		$this->db->where('satuan', $this->session->userdata('satuan'));
		$this->db->order_by('id','desc');
		return $this->db->get('laphar');
    }

    public function reviewdivhumas()
    {
        $this->db->where('time  >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time  <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
		$this->db->where('satuan', $this->session->userdata('satuan'));
		$this->db->order_by('id','desc');
		return $this->db->get('laphardivhumas');
    }

    public function hitungreviewblog()
    {
        $this->db->where('tglinput_blog  >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('tglinput_blog  <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
		$this->db->where('publish', $this->session->userdata('satuan'));
		$this->db->order_by('tglinput_blog','desc');
		$query = $this->db->get('blog');
      
        if($query->num_rows()>0)
        {
        return $query->num_rows(). ' berita';
        }
        else
        {
        return nihil;
        }
    }

    public function hitungreviewmedon()
    {
        $this->db->where('time  >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time  <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
		$this->db->where('satuan', $this->session->userdata('satuan'));
		$this->db->order_by('id','desc');
		$query = $this->db->get('laphar');
      
        if($query->num_rows()>0)
        {
        return $query->num_rows(). ' berita';
        }
        else
        {
        return nihil;
        }
    }

    public function hitungreviewdivhumas()
    {
        $this->db->where('time  >=', date("Y-m-d H:i:s",strtotime("-1 days" . "20:00:00")));
        $this->db->where('time  <=', date("Y-m-d H:i:s",strtotime("now" . "20:00:00")));
		$this->db->where('satuan', $this->session->userdata('satuan'));
		$this->db->order_by('id','desc');
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