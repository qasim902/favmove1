<?php

 
class Property extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Property_model');
    } 

    /*
     * Listing of property
     */
    function index()
    {
        $data['property'] = $this->Property_model->get_all_property();
        
        $data['_view'] = 'property/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new property
     */
    function add()
    {   
        if ($this->input->post())
        {
         $this->form_validation->set_rules('town_id','Town Id','required|integer');
        
        $this->form_validation->set_rules('title','Title','required|max_length[255]');
        
        $this->form_validation->set_rules('address','Address','required|max_length[255]');
        
        $this->form_validation->set_rules('status','Status','max_length[255]');
        
        $this->form_validation->set_rules('video_embed','Video Embed','max_length[255]');
        
        $this->form_validation->set_rules('price','Price','required|numeric');
        $this->form_validation->set_rules('prop_type','Prop Type','required|max_length[15]');
        $this->form_validation->set_rules('description','Description','required');
            $this->db->select_max('prop_id');
            $result= $this->db->get('property')->row_array();
            $id = ++$result['prop_id'];
            
            
        if($this->form_validation->run())     
        {   
            $params = array(
                'prop_id' => $id,
                'prop' =>   array(

                'town_id' => $this->input->post('town_id'),
                'agent_id' => '1',
                'prop_type' => $this->input->post('prop_type'),
                'title' => $this->input->post('title'),
                'excerpt' => substr($this->input->post('description'),0,50),
                'address' => $this->input->post('address'),
                'status' => $this->input->post('status'),
                'video_embed' => $this->input->post('video_embed'),
                'is_feat' => $this->input->post('is_feat'),
                'price' => $this->input->post('price'),
                'description' => $this->input->post('description'),
                'new_build' => $this->input->post('new_build'),
                'features' => $id,
                'prop_details' => $id
                 ),
                'feat' => array(
                    'prop_id' => $id,
                'AC' => $this->input->post('AC'),
                'Barbeque' => $this->input->post('Barbeque'),
                'Lawn' => $this->input->post('Lawn'),
                'Laundry' => $this->input->post('Laundry'),
                'Balcony' => $this->input->post('Balcony'),
                'theater' => $this->input->post('Home_Theater'),
                'Basement' => $this->input->post('Basement')),

                'prop_details' => array (
                    'prop_id' => $id,
                'bathrooms' => $this->input->post('bathrooms'),
                'garage' => $this->input->post('garage'),
                'bedrooms' => $this->input->post('bedrooms'),
                'area' => $this->input->post('area'),
                'lounge' => $this->input->post('lounge'),
                'price' => $this->input->post('price')
                )
            );

            
            
            $property_id = $this->Property_model->add_propert($params);
            if ($property_id)
            {
             if (!file_exists('./resources/img/properties/'.$property_id.'/')) {
                mkdir('./resources/img/properties/'.$property_id.'/', 0777, true);
                }
            
            $config['upload_path'] = "./resources/img/properties/".$property_id."/";
            $config['allowed_types'] = 'jpg|jpeg|png';
            $this->load->library('upload');
            $files           = $_FILES;
            $number_of_files = count($_FILES['pic']['name']);
            $errors = 0;
            for ($i = 0; $i < $number_of_files; $i++)
            {
                $_FILES['pic']['name'] = $files['pic']['name'][$i];
                $_FILES['pic']['type'] = $files['pic']['type'][$i];
                $_FILES['pic']['tmp_name'] = $files['pic']['tmp_name'][$i];
                $_FILES['pic']['error'] = $files['pic']['error'][$i];
                $_FILES['pic']['size'] = $files['pic']['size'][$i];
                $this->upload->initialize($config);

                if (! $this->upload->do_upload("pic")) {
                    $errors++;
                }
            }
            if ($errors > 0) {
                echo $errors . "File(s) cannot be uploaded";
            }
            echo "success";
           }
           else{
            die("error no insert");
           }

             redirect('property/index');
        }
        else {
            echo validation_errors('<div class="error">', '</div>');
        }
            
           
        }
        else
        {
			$this->load->model('Prop_detail_model');
			$data['all_prop_details'] = $this->Prop_detail_model->get_all_prop_details();

			$this->load->model('Feature_model');
			$data['all_features'] = $this->Feature_model->get_all_features();

			$this->load->model('Agent_model');
			$data['all_agents'] = $this->Agent_model->get_all_agents();

			$this->load->model('Uk_town_model');
			$data['all_uk_towns'] = $this->Uk_town_model->get_all_uk_towns();
            $data['assets'] = base_url()."resources/";
            $data['_view'] = 'frontend/views/submit_prop';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a property
     */
    function edit($prop_id)
    {   
        // check if the property exists before trying to edit it
        $data['property'] = $this->Property_model->get_property($prop_id);
        
        if(isset($data['property']['prop_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('address','Address','required|max_length[255]');
			$this->form_validation->set_rules('status','Status','max_length[255]');
			$this->form_validation->set_rules('video_embed','Video Embed','max_length[255]');
			$this->form_validation->set_rules('agent_id','Agent Id','required|integer');
			$this->form_validation->set_rules('price','Price','required|numeric');
			$this->form_validation->set_rules('town_id','Town Id','max_length[255]');
			$this->form_validation->set_rules('description','Description','required');
			$this->form_validation->set_rules('prop_details','Prop Details','required');
			$this->form_validation->set_rules('features','Features','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'prop_details' => $this->input->post('prop_details'),
					'features' => $this->input->post('features'),
					'agent_id' => $this->input->post('agent_id'),
					'town_id' => $this->input->post('town_id'),
					'address' => $this->input->post('address'),
					'status' => $this->input->post('status'),
					'video_embed' => $this->input->post('video_embed'),
					'created_on' => $this->input->post('created_on'),
					'sold_on' => $this->input->post('sold_on'),
					'is_feat' => $this->input->post('is_feat'),
					'price' => $this->input->post('price'),
					'description' => $this->input->post('description'),
					'property_images' => $this->input->post('property_images'),
                );

                $this->Property_model->update_property($prop_id,$params);            
                redirect('property/index');
            }
            else
            {
				$this->load->model('Prop_detail_model');
				$data['all_prop_details'] = $this->Prop_detail_model->get_all_prop_details();

				$this->load->model('Feature_model');
				$data['all_features'] = $this->Feature_model->get_all_features();

				$this->load->model('Agent_model');
				$data['all_agents'] = $this->Agent_model->get_all_agents();

				$this->load->model('Uk_town_model');
				$data['all_uk_towns'] = $this->Uk_town_model->get_all_uk_towns();

                $data['_view'] = 'property/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The property you are trying to edit does not exist.');
    } 

    /*
     * Deleting property
     */
    function remove($prop_id)
    {
        $property = $this->Property_model->get_property($prop_id);

        // check if the property exists before trying to delete it
        if(isset($property['prop_id']))
        {
            $this->Property_model->delete_property($prop_id);
            redirect('property/index');
        }
        else
            show_error('The property you are trying to delete does not exist.');
    }
    
}
