<?php

 
class Agency_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get agency by id
     */
    function get_agency($id)
    {
        return $this->db->get_where('agency',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all agency
     */
    function get_all_agency()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('agency')->result_array();
    }
        
    /*
     * function to add new agency
     */
    function add_agency($params)
    {
        $this->db->insert('agency',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update agency
     */
    function update_agency($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('agency',$params);
    }
    
    /*
     * function to delete agency
     */
    function delete_agency($id)
    {
        return $this->db->delete('agency',array('id'=>$id));
    }
}
