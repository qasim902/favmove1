<?php

class Ad_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get ad by id
     */
    function get_ad($id)
    {
        return $this->db->get_where('ads',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all ads
     */
    function get_all_ads()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('ads')->result_array();
    }
        
    /*
     * function to add new ad
     */
    function add_ad($params)
    {
        $this->db->insert('ads',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update ad
     */
    function update_ad($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('ads',$params);
    }
    
    /*
     * function to delete ad
     */
    function delete_ad($id)
    {
        return $this->db->delete('ads',array('id'=>$id));
    }
}
