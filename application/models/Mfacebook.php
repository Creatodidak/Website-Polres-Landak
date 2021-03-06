<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Mfacebook extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get facebook by id
     */
    function get_facebook($id)
    {
        return $this->db->get_where('facebook',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all facebook
     */
    function get_all_facebook()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('facebook')->result_array();
    }
        
    /*
     * function to add new facebook
     */
    function add_facebook($data)
    {
        return $this->db->insert_batch('facebook', $data);
    }
    
    /*
     * function to update facebook
     */
    function update_facebook($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('facebook',$params);
    }
    
    /*
     * function to delete facebook
     */
    function delete_facebook($id)
    {
        return $this->db->delete('facebook',array('id'=>$id));
    }
}
