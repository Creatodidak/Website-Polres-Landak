<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Mlaphar extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get laphar by id
     */
    function get_laphar($id)
    {
        return $this->db->get_where('laphar',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all laphar count
     */
    function get_all_laphar_count()
    {
        $this->db->from('laphar');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all laphar
     */
    function get_all_laphar($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('laphar')->result_array();
    }
        
    /*
     * function to add new laphar
     */
    function add_laphar($params)
    {
        $this->db->insert('laphar',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update laphar
     */
    function update_laphar($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('laphar',$params);
    }
    
    /*
     * function to delete laphar
     */
    function delete_laphar($id)
    {
        return $this->db->delete('laphar',array('id'=>$id));
    }
}
