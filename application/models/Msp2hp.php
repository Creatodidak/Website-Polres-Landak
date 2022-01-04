<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Msp2hp extends CI_Model
{

public $table = 'sp2hp';
public $id = 'id';
public $order = 'DESC';

function __construct()
{
parent::__construct();
}

// get all
function get_all()
{
$this->db->order_by($this->id, $this->order);
return $this->db->get($this->table)->result();
}

// get data by id
function get_by_id($id)
{
$this->db->where($this->id, $id);
return $this->db->get($this->table)->row();
}

// get total rows
function total_rows($q = NULL) {
$this->db->like('id', $q);
$this->db->or_like('kode', $q);
$this->db->or_like('lp', $q);
$this->db->or_like('tgl', $q);
$this->db->or_like('ttg', $q);
$this->db->or_like('tsk', $q);
$this->db->or_like('a1', $q);
$this->db->or_like('a2', $q);
$this->db->or_like('a3', $q);
$this->db->or_like('a4', $q);
$this->db->or_like('a5', $q);
$this->db->or_like('last', $q);
$this->db->or_like('qr', $q);
$this->db->from($this->table);
return $this->db->count_all_results();
}



// get data with limit and search
function get_limit_data($limit, $start = 0, $q = NULL) {
$this->db->order_by($this->id, $this->order);
$this->db->like('id', $q);
$this->db->or_like('kode', $q);
$this->db->or_like('lp', $q);
$this->db->or_like('tgl', $q);
$this->db->or_like('ttg', $q);
$this->db->or_like('tsk', $q);
$this->db->or_like('a1', $q);
$this->db->or_like('a2', $q);
$this->db->or_like('a3', $q);
$this->db->or_like('a4', $q);
$this->db->or_like('a5', $q);
$this->db->or_like('last', $q);
$this->db->or_like('qr', $q);
$this->db->limit($limit, $start);
return $this->db->get($this->table)->result();
}

function add_sp2hp($params)
{
$this->db->insert('sp2hp',$params);
return $this->db->insert_id();
}

function simpan($kode, $lp, $tgl, $ttg, $tsk, $a1, $last, $qr){
$hasil=$this->db->query("INSERT INTO sp2hp (kode, lp, tgl, ttg, tsk, a1, last, qr ) 
VALUES ('$kode', '$lp', '$tgl', '$ttg', '$tsk', '$a1', '$last', '$a1')");
return $hasil;
}

function masuk($table, $where){    
        return $this->db->get_where($table,$where);
}

function excupdate($nama, $format, $isi, $last){
$excupdt = $this->db->query("UPDATE sp2hp SET $format = '$isi', last = '$last', qr = '$isi' WHERE tsk='$nama'");
return $excupdt;
}

// update data
function update($id, $data)
{
$this->db->where($this->id, $id);
$this->db->update($this->table, $data);
}

// delete data
function delete($id)
{
$this->db->where($this->id, $id);
$this->db->delete($this->table);
}

public function cari($keyword){
		$data = $this->db->query("SELECT qr FROM sp2hp WHERE kode='$keyword'");
			return $data;
		}

}
