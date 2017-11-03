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

    function getinquiries($id)
    {
        return $this->db->get_where('inquiries', array('agid' => $id))->result_array();
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
    function add_agent($data)
    {
        return $this->db->insert('agents',$data);
        //$this->db->insert_id();
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

    function addphone($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('agents', $data);
    }

    function showainbox($id)
    {
        return $this->db->get_where('agentinbox', array('agentid'=>$id))->result_array();
    }

    function searchagent($town_id, $agent_name)
    {
       // $this->db->get_where('agents', array('fname'=>$agent_name, 'lname'=>$agent_name, 'address'=>$town_id ))->result_array();
         if($town_id == null)
         {
             $town_id = "";
         }
         if($agent_name == "")
         {
             $agent_name = "";
         }
        //  $this->db->select('*');
        //  $this->db->from('agents');
        //  $this->db->like('address' , $town_id);
        //  $this->db->like('fname' , $agent_name);
        //  $this->db->or_like('lname' , $agent_name);
        $query = $this->db->query("SELECT * FROM agents WHERE (fname LIKE '%$agent_name%' OR lname LIKE '%$agent_name%') 
                                    AND address LIKE '%$town_id%' ;");
        return $query->result_array();

    }
    
}
