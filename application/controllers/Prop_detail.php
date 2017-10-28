<?php

 
class Prop_detail extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Prop_detail_model');
    } 

    /*
     * Listing of prop_details
     */
    function index()
    {
        $data['prop_details'] = $this->Prop_detail_model->get_all_prop_details();
        
        $data['_view'] = 'prop_detail/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new prop_detail
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('bathrooms','Bathrooms','integer');
		$this->form_validation->set_rules('garage','Garage','integer');
		$this->form_validation->set_rules('bedrooms','Bedrooms','integer');
		$this->form_validation->set_rules('area','Area','integer');
		$this->form_validation->set_rules('lounge','Lounge','integer');
		$this->form_validation->set_rules('price','Price','integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
                'prop_id' => $this->input->post('prop_id'),
				'bathrooms' => $this->input->post('bathrooms'),
				'garage' => $this->input->post('garage'),
				'bedrooms' => $this->input->post('bedrooms'),
				'area' => $this->input->post('area'),
				'lounge' => $this->input->post('lounge'),
				'price' => $this->input->post('price'),
            );
            
            $prop_detail_id = $this->Prop_detail_model->add_prop_detail($params);
            redirect('prop_detail/index');
        }
        else
        {            
            $this->load->model('Property_model');
            $data['all_property'] = $this->Property_model->get_all_property();
            
            $data['_view'] = 'prop_detail/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a prop_detail
     */
    function edit($property_id)
    {   
        // check if the prop_detail exists before trying to edit it
        $data['prop_detail'] = $this->Prop_detail_model->get_prop_detail($property_id);
        
        if(isset($data['prop_detail']['prop_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('bathrooms','Bathrooms','integer');
			$this->form_validation->set_rules('garage','Garage','integer');
			$this->form_validation->set_rules('bedrooms','Bedrooms','integer');
			$this->form_validation->set_rules('area','Area','integer');
			$this->form_validation->set_rules('lounge','Lounge','integer');
			$this->form_validation->set_rules('price','Price','integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
                    'prop_id' => $this->input->post('prop_id'),
					'bathrooms' => $this->input->post('bathrooms'),
					'garage' => $this->input->post('garage'),
					'bedrooms' => $this->input->post('bedrooms'),
					'area' => $this->input->post('area'),
					'lounge' => $this->input->post('lounge'),
					'price' => $this->input->post('price'),
                );

                $this->Prop_detail_model->update_prop_detail($property_id,$params);            
                redirect('prop_detail/index');
            }
            else
            {
                $this->load->model('Property_model');
                $data['all_property'] = $this->Property_model->get_all_property();
            
                $data['_view'] = 'prop_detail/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The prop_detail you are trying to edit does not exist.');
    } 

    /*
     * Deleting prop_detail
     */
    function remove($property_id)
    {
        $prop_detail = $this->Prop_detail_model->get_prop_detail($property_id);

        // check if the prop_detail exists before trying to delete it
        if(isset($prop_detail['property_id']))
        {
            $this->Prop_detail_model->delete_prop_detail($property_id);
            redirect('prop_detail/index');
        }
        else
            show_error('The prop_detail you are trying to delete does not exist.');
    }
    
}
