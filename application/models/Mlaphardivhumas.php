<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Mlaphardivhumas extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get laphardivhumas by id
     */
    function get_laphardivhumas($id)
    {
        return $this->db->get_where('laphardivhumas',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all laphardivhumas count
     */
    function get_all_laphardivhumas_count($laporan)
    {   $this->db->where('laphardivhumas', $laporan);
        $this->db->from('laphardivhumas');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all laphardivhumas
     */
    function get_all_laphardivhumas($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('laphardivhumas')->result_array();
    }
        
    /*
     * function to add new laphardivhumas
     */
    function add_laphardivhumas($params)
    {
        $this->db->insert('laphardivhumas',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update laphardivhumas
     */
    function update_laphardivhumas($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('laphardivhumas',$params);
    }
    
    /*
     * function to delete laphardivhumas
     */
    function delete_laphardivhumas($id)
    {
        return $this->db->delete('laphardivhumas',array('id'=>$id));
    }
}
