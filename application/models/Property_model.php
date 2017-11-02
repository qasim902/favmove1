<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Property_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get property by prop_id
     */
    function get_property($prop_id)
    {
        return $this->db->get_where('property',array('prop_id'=>$prop_id))->row_array();
    }
    function get_propertys($stat)
    {
        return $this->db->get_where('property',array('status'=>$stat))->result_array();
    }

    function get_propcount($postcodes)
    {
        $this->db->from('property');
        $this->db->where_in('town_id',$postcodes);

        // $data = $this->db->get()->result_array();
        return $this->db->count_all_results();
        
    }
 
    function prop_avg()
    {
        $row = $this->db->get_where('property', array('town_id'=> 'AB10'))->num_rows();
        $query =  $this->db->select('AVG(price) average')->from('property')->get();
        $count = $query->row()->average;
        $data['one'] = $row;
        $data['two'] = $count;
        
       // $a = array('row'=> $row, 'count'=> $count);
        return $data;
    }


    function get_prop_where($key, $value)
    {
        $this->load->model('Feature_model');
        $this->load->model('Prop_detail_model');
        $properties = $this->db->get_where('property',array($key=>$value))->result_array();
        foreach($properties as &$prop)
        {
            $feats = $this->Feature_model->get_feature($prop['features']);
            $dets = $this->Prop_detail_model->get_prop_detail($prop['prop_details']);
            $prop['prop_details'] = $dets;
            $prop['features'] = $feats;
        }
        return $properties;
    }

    function get_propertyag($ag)
    {
        return $this->db->get_where('property',array('agent_id'=>$ag))->result_array();
    }

    function search_property($params)
    {



          $this->db->select('*');
        $this->db->from('property');

        $this->db->join('prop_details', 'property.prop_id = prop_details.prop_id');
        $this->db->join('features', 'property.prop_id = features.prop_id');
        
        // print_r($params);die();

        if (!empty($params['keyword']))
        {
        $this->db->like('title', $params['keyword']);
        $this->db->or_like('description',$params['keyword']);
        $this->db->or_like('excerpt', $params['keyword']);
        }
        
        $conditions = "";

        if (!empty($params['town_id']))
        {
            $conditions .= 'town_id = "'.$params['town_id'].'" AND ';
        }
        if (!empty($params['prop_type']))
        {
            $conditions .= ' prop_type = "'.$params['prop_type'].'" AND';
        }
         if (!empty($params['prop_stat']))
        {
            $conditions .= ' status = "'.$params['prop_stat'].'" AND';
        }

        if (!empty($params['bath']))
        {
             $conditions .= ' bathrooms = "'.$params['bath'].'" AND';
        }

        if (!empty($params['bed']))
        {
            $conditions .= ' bedrooms = "'.$params['bed'].'" AND';
        }

        if (!empty($params['min_area']))
        {
            $conditions .= ' prop_details.area >= "'.$params['min_area'].'" AND';
        }
        if (!empty($params['max_area']))
        {
            $conditions .= ' prop_details.area <= "'.$params['max_area'].'" AND';
        }

      if (!empty($params['min_price']))
        {
            $conditions .= ' price >= "'.$params['min_price'].'" AND';
        }

       if (!empty($params['max_price']))
        {
            $conditions .= ' price <= "'.$params['max_price'].'" AND';   
        }
        $conditions .= ' published = "1"';
        $this->db->where($conditions);
        // print_r($conditions);
        $query = $this->db->get();        

        return $query->result_array();

       
    }
        
    /*
     * Get all property
     */
    function get_all_property()
    {
        $this->db->order_by('prop_id', 'asc');
        $this->db->limit(6);
        return $this->db->get('property')->result_array();
    }
   
    /*
     * function to add new property
     */
    function add_property($params)
    {
        $this->db->insert('property',$params);
        return $this->db->insert_id();
    }

    function add_propert($params)
    { 
        //var_dump($params['feat']); die();
       $this->db->insert('property',$params['prop']);
       $id =  $this->db->insert_id();
        $this->db->insert('features',$params['feat']);
        $this->db->insert('prop_details',$params['prop_details']);
       return $id;
    }
 
    /*
     * function to update property
     */
    function update_property($prop_id,$params)
    {
        $this->db->where('prop_id',$prop_id);
        return $this->db->update('property',$params);
    }
    
    /*
     * function to delete property
     */
    function delete_property($prop_id)
    {
        return $this->db->delete('property',array('prop_id'=>$prop_id));
    }
    function propprint($id)
    {
        return $this->db->get_where('property', array('prop_id' =>$id))->result_array();
    }
    function featureprint($id)
    {
        return $this->db->get_where('features', array('prop_id' =>$id))->result_array();
    }

    function mysearch_count($data)
    {
        $title=$data['title'];
        $protype = $data['prop_type'];
        $townid = $data['town_id'];
        $status = $data['status'];
        $bedrooms = $data['bedrooms'];
        $bathrooms = $data['bathrooms'];
        $min_area = $data['min_area'];
        $max_area = $data['max_area'];
        $min_price = $data['min_price'];
        $max_price = $data['max_price'];

        $AC = $data['AC'];
        $Barbeque = $data['Barbeque'];
        $Laundry = $data['Laundry'];
        $Theater = $data['theater'];
        $Lawn = $data['Lawn'];
        $Basement = $data['Basement'];
        $Balcony = $data['Balcony'];
        
        if($title == "")
        {
            $title = "";
        }
        if($protype == "")
        {
            $protype = "";
        }
        if($townid == "")
        {
            $townid = "";
        }
        if($bedrooms == 0)
        {
            $bedrooms = 0;
        }
        if($bathrooms == 0)
        {
            $bathrooms = 0;
        }
        if($min_area == 0)
        {
            $min_area = 0;
        }
        if($min_price == 0)
        {
            $min_price = 0;   
        }
        if($max_area == 0)
        {
            // $this->db->select_max('area');
            // $this->db->from('prop_details');
            // $max_area = $this->db->get(); 
            $max_area = 100000000;
        }
        if($max_price == 0)
        {
            $max_price = 10000000;   
        }

        if($AC == null)
        {
            $AC = 0;   
        }
        if($Barbeque == null)
        {
            $Barbeque = 0;   
        }
        if($Laundry == null)
        {
            $Laundry = 0;   
        }
        if($Theater == null)
        {
            $Theater = 0;   
        }
        if($Lawn == null)
        {
            $Lawn = 0;   
        }
        if($Basement == null)
        {
            $Basement = 0;   
        }
        if($Balcony == null)
        {
            $Balcony = 0;   
        }

        //echo $pagination;exit;
      //  var_dump($AC); die();
        $query = $this->db->query("SELECT * FROM property JOIN  prop_details as pd ON property.prop_id = pd.prop_id 
                                    JOIN features ON property.prop_id = features.prop_id
                                    AND title LIKE '%$title%' AND prop_type LIKE '%$protype%' AND town_id LIKE '%$townid%'
                                    AND status LIKE '%$status%' AND bedrooms  >= $bedrooms
                                    AND bathrooms  >= $bathrooms
                                    AND area  <= $max_area
                                    AND area  >= $min_area
                                    AND price  <= $max_price
                                    AND price  >= $min_price
                                    AND (features.AC = 1
                                    OR features.AC = $AC)

                                    AND (features.Barbeque = 1
                                    OR features.Barbeque = $Barbeque)

                                    AND (features.Laundry = 1
                                    OR features.Laundry = $Laundry)

                                    AND (features.theater = 1
                                    OR features.theater = $Theater)

                                    AND (features.Lawn = 1
                                    OR features.Lawn = $Lawn)

                                    AND (features.Basement = 1
                                    OR features.Basement = $Basement)

                                    AND (features.Balcony = 1
                                    OR features.Balcony = $Balcony)
  
                                    ;");
                                   //   $query = $this->db->limit($limit_per_page, $start_index);

                                    return $query->result_array();
                                }
        

                                function mysearch($data,$limit_per_page, $start_index)
                                {
                                    $title=$data['title'];
                                    $protype = $data['prop_type'];
                                    $townid = $data['town_id'];
                                    $status = $data['status'];
                                    $bedrooms = $data['bedrooms'];
                                    $bathrooms = $data['bathrooms'];
                                    $min_area = $data['min_area'];
                                    $max_area = $data['max_area'];
                                    $min_price = $data['min_price'];
                                    $max_price = $data['max_price'];
                            
                                    $AC = $data['AC'];
                                    $Barbeque = $data['Barbeque'];
                                    $Laundry = $data['Laundry'];
                                    $Theater = $data['theater'];
                                    $Lawn = $data['Lawn'];
                                    $Basement = $data['Basement'];
                                    $Balcony = $data['Balcony'];
                                    
                                    if($title == "")
                                    {
                                        $title = "";
                                    }
                                    if($protype == "")
                                    {
                                        $protype = "";
                                    }
                                    if($townid == "")
                                    {
                                        $townid = "";
                                    }
                                    if($bedrooms == 0)
                                    {
                                        $bedrooms = 0;
                                    }
                                    if($bathrooms == 0)
                                    {
                                        $bathrooms = 0;
                                    }
                                    if($min_area == 0)
                                    {
                                        $min_area = 0;
                                    }
                                    if($min_price == 0)
                                    {
                                        $min_price = 0;   
                                    }
                                    if($max_area == 0)
                                    {
                                        // $this->db->select_max('area');
                                        // $this->db->from('prop_details');
                                        // $max_area = $this->db->get(); 
                                        $max_area = 100000000;
                                    }
                                    if($max_price == 0)
                                    {
                                        $max_price = 10000000;   
                                    }
                            
                                    if($AC == null)
                                    {
                                        $AC = 0;   
                                    }
                                    if($Barbeque == null)
                                    {
                                        $Barbeque = 0;   
                                    }
                                    if($Laundry == null)
                                    {
                                        $Laundry = 0;   
                                    }
                                    if($Theater == null)
                                    {
                                        $Theater = 0;   
                                    }
                                    if($Lawn == null)
                                    {
                                        $Lawn = 0;   
                                    }
                                    if($Basement == null)
                                    {
                                        $Basement = 0;   
                                    }
                                    if($Balcony == null)
                                    {
                                        $Balcony = 0;   
                                    }
                                    if($limit_per_page != '' && $start_index != ''){
                                        $pagination = "LIMIT $limit_per_page OFFSET $start_index";
                                    }else{
                                        $pagination = "";
                                    }
                                    //echo $pagination;exit;
                                  //  var_dump($AC); die();
                                    $query = $this->db->query("SELECT * FROM property JOIN  prop_details as pd ON property.prop_id = pd.prop_id 
                                                                JOIN features ON property.prop_id = features.prop_id
                                                                AND title LIKE '%$title%' AND prop_type LIKE '%$protype%' AND town_id LIKE '%$townid%'
                                                                AND status LIKE '%$status%' AND bedrooms  >= $bedrooms
                                                                AND bathrooms  >= $bathrooms
                                                                AND area  <= $max_area
                                                                AND area  >= $min_area
                                                                AND price  <= $max_price
                                                                AND price  >= $min_price
                                                                AND (features.AC = 1
                                                                OR features.AC = $AC)
                            
                                                                AND (features.Barbeque = 1
                                                                OR features.Barbeque = $Barbeque)
                            
                                                                AND (features.Laundry = 1
                                                                OR features.Laundry = $Laundry)
                            
                                                                AND (features.theater = 1
                                                                OR features.theater = $Theater)
                            
                                                                AND (features.Lawn = 1
                                                                OR features.Lawn = $Lawn)
                            
                                                                AND (features.Basement = 1
                                                                OR features.Basement = $Basement)
                            
                                                                AND (features.Balcony = 1
                                                                OR features.Balcony = $Balcony)
                                                                LIMIT $limit_per_page OFFSET $start_index
                                                                ;");
                                                               //   $query = $this->db->limit($limit_per_page, $start_index);
                            
                                                                return $query->result_array();
                                                            }
        // $this->db->select('*');
        // $this->db->from('property');
        // $this->db->join('prop_details', 'property.prop_id = prop_details.prop_id');
        // $this->db->join('features', 'property.prop_id = features.prop_id');
        // $this->db->like('title', $data['title']);
        // $this->db->like('prop_type', $data['prop_type']);
        // $this->db->like('town_id', $data['town_id']);
        // $this->db->where('bathrooms >=', $data['bathrooms']);
        // $this->db->where('bedrooms >=', $data['bedrooms']);
        // $this->db->where('area <=', $data['min_area']);
        // $this->db->where('area >', $data['max_area']);
        // $this->db->where('prop_details.price <=', $data['min_price']);
        // $this->db->where('prop_details.price >', $data['max_price']);


        // $this->db->like('status', $data['status']);
        // $this->db->like('status', $data['status']);
        // $this->db->like('status', $data['status']);

        
        
        // foreach ($query->result_array() as $user)
        // {
        //         //echo $user['title'] . "<br>";
        //        // var_dump($query); die();
                
                
                
                
        //         // access attributes
        //        // echo $user->reverse_name(); // or methods defined on the 'User' class
        // }

    
       // if (!empty($data['keyword']))
      //  {
       // $this->db->like('title', $data['title']);
        //$this->db->like('description',$data['title']);
        //$this->db->like('town_id', $data['town_id']);
      //  $this->db->like('prop_type', $data['prop_type']);
        
        //$this->db->like('bedrooms', $data['bed']);
        //$this->db->like('bathrooms', $data['bath']);
      //  $this->db->or_like('area', $data['min_area']);
       // $this->db->or_like('area', $data['max_area']);
      // $this->db->or_like('price', $data['min_price']);
       //$this->db->or_like('price', $data['max_price']);
      
     //   }
        
       

    //     if (!empty($data['town_id']))
    //     {
    //         $conditions .= 'town_id = "'.$data['town_id'].'" AND';
    //         //var_dump($conditions) ; die();
    //     }
    //     if (!empty($data['prop_type']))
    //     {
    //         $conditions .= ' prop_type = "'.$data['prop_type'].'"';
    //     }
    //      if (!empty($data['prop_stat']))
    //     {
    //         $conditions .= ' status = "'.$data['prop_stat'].'" AND';
    //     }

    //     if (!empty($data['bath']))
    //     {
    //          $conditions .= ' bathrooms = "'.$data['bath'].'" AND';
    //     }

    //     if (!empty($data['bed']))
    //     {
    //         $conditions .= ' bedrooms = "'.$data['bed'].'" AND';
    //     }

    //     if (!empty($data['min_area']))
    //     {
    //         $conditions .= ' prop_details.area >= "'.$data['min_area'].'" AND';
    //     }
    //     if (!empty($data['max_area']))
    //     {
    //         $conditions .= ' prop_details.area <= "'.$data['max_area'].'" AND';
    //     }

    //   if (!empty($data['min_price']))
    //     {
    //         $conditions .= ' price >= "'.$data['min_price'].'" AND';
    //     }

    //    if (!empty($data['max_price']))
    //     {
    //         $conditions .= ' price <= "'.$data['max_price'].'" AND';   
    //     }
        //$conditions .= ' published = "1"';
        //$this->db->where($data);
        // print_r($conditions);
        //$query = $this->db->get();        

       // return $query->result_array();

       
    
        // $this->db->like('title',$data['title']);
        // $this->db->like('town_id',$data['town_id']);
        // $this->db->like('status',$data['status']);
        // $this->db->like('price',$data['price']);
        // $this->db->like('prop_type',$data['prop_type']);
        // $this->db->like('prop_type',$data['prop_type']);
        // $this->db->like('prop_type',$data['prop_type']);
        // $this->db->like('prop_type',$data['prop_type']);
        // $this->db->like('prop_type',$data['prop_type']);
        
        function allproperties()
        {
             $query = $this->db->query("SELECT * from property");
             return $query->num_rows();

        }

        function getallpropertiesies($limit, $start)
        {
            $this->db->limit($limit, $start);
            $this->db->order_by('prop_id', 'desc');
            $query = $this->db->select('*')
            ->from('property')
            ->get();
            if($query->num_rows() > 0)
            {
                foreach ($query->result() as $row) 
                {
                    $data[] = $row;
                }
                return $data;
            }
            else
            {
                return false;
            }
        }
    
}
