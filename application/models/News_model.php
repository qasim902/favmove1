<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class News_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get news by id
     */
    function get_news($id)
    {
        return $this->db->get_where('news',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all news
     */
    function get_all_news()
    {
       // $this->db->order_by('id', 'desc');
      // return  $this->db->get('news')->order_by("name", "asc")->result_array();
      

        return $this->db->get('news')->result_array();
        
    }
            function get_all_news_main()
    {
       // $this->db->order_by('id', 'desc');
      // return  $this->db->get('news')->order_by("name", "asc")->result_array();
      
      $this->db->from('news');
$this->db->order_by("id", "desc");
 $this->db->limit('3');
$query = $this->db->get(); 
return $query->result_array();
       // return $this->db->get('news')->result_array();
        
    }
    /*
     * function to add new news
     */
    function add_news($params)
    {
        $this->db->insert('news',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update news
     */
    function update_news($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('news',$params);
    }
    
    /*
     * function to delete news
     */
    function delete_news($id)
    {
        return $this->db->delete('news',array('id'=>$id));
    }
}
