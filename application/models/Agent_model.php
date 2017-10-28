<?php

class Agent_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get agent by id
     */
    function get_agent($id)
    {
        return $this->db->get_where('agents',array('id'=>$id))->row_array();
    }

    function getinquiries($email)
    {
        
        return $this->db->get_where('inquiries', array('agemail' => $email))->result_array();
    }

    function get_agent_where($key,$value)
    {
        return $this->db->get_where('agents',array($key=>$value))->row_array();
    }
        
    /*
     * Get all agents
     */
    function get_all_agents()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('agents')->result_array();
    }
        
    /*
     * function to add new agent
     */
    function add_agent($params)
    {
        $this->db->insert('agents',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update agent
     */
    function update_agent($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('agents',$params);
    }
    
    /*
     * function to delete agent
     */
    function delete_agent($id)
    {
        return $this->db->delete('agents',array('id'=>$id));
    }
    function showagquery($data)
    {
        return $this->db->get_where('inquiries', array('id'=>$data))->result_array();
    }
    function aginbox($id, $data)
    {
        return $this->db->insert('agentnbox', $data);
    }
}
