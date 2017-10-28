
<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Uk_town_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get uk_town by postcode
     */
    function get_uk_town($postcode)
    {
        return $this->db->get_where('uk_towns',array('postcode'=>$postcode))->row_array();
    }
    
    /*
     * Get all uk_towns count
     */

    function get_ukregions()
    {
        $this->db->select('uk_region');
        $this->db->from('uk_towns');
        $this->db->group_by('uk_region');
        return $this->db->get()->result_array();
    }

    function get_regions($region)
    {
        $this->db->select('region');
        // $this->db->limit('10');
        $this->db->from('uk_towns');
        $this->db->group_by('region');
        $this->db->where('uk_region', $region);
        return $this->db->get()->result_array();
    }

function get_regionpostcodes($region, $ukr)
{
    $this->db->select('postcode');
    $this->db->from('uk_towns');
    $this->db->where(
        array('region'=> $region,'uk_region' => $ukr)
    );
    $postcodes = array();
    $pc = $this->db->get()->result_array();
    foreach ($pc as $id => $pcc)
    {
        $postcodes[$id] = $pcc['postcode']; 
        // echo $pcc['postcode'];
    } 
    return $postcodes;
    
}
    function get_all_uk_towns_count()
    {
        $this->db->from('uk_towns');
        return $this->db->count_all_results();
    }

    function get_all_where($key,$value)
    {
        return $this->db->get('uk_towns',array($key=>$value))->result_array();
    }

    function group_by_ukregion()
    {
        $towns = array();
        $this->db->select('*');
        $this->db->group_by("uk_region"); 
        return $this->db->get('uk_towns')->result_array();
    }
        
    /*
     * Get all uk_towns
     */
    function get_all_uk_towns($params = array())
    {
        $this->db->order_by('postcode', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('uk_towns')->result_array();
    }
        
    /*
     * function to add new uk_town
     */
    function add_uk_town($params)
    {
        $this->db->insert('uk_towns',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update uk_town
     */
    function update_uk_town($postcode,$params)
    {
        $this->db->where('postcode',$postcode);
        return $this->db->update('uk_towns',$params);
    }
    
    /*
     * function to delete uk_town
     */
    function delete_uk_town($postcode)
    {
        return $this->db->delete('uk_towns',array('postcode'=>$postcode));
    }
}