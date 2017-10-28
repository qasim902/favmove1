<?php

 
class Agency extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Agency_model');
    } 

    /*
     * Listing of agency
     */
    function index()
    {
        $data['agency'] = $this->Agency_model->get_all_agency();
        
        $data['_view'] = 'agency/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new agency
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','required|max_length[255]');
		$this->form_validation->set_rules('agency_logo','Agency Logo','max_length[255]');
		$this->form_validation->set_rules('fb_link','Fb Link','max_length[255]');
		$this->form_validation->set_rules('linkedin_link','Linkedin Link','max_length[255]');
		$this->form_validation->set_rules('twit_link','Twit Link','max_length[255]');
		$this->form_validation->set_rules('gplus_link','Gplus Link','max_length[255]');
		$this->form_validation->set_rules('youtube_link','Youtube Link','max_length[255]');
		$this->form_validation->set_rules('address','Address','required|max_length[255]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'name' => $this->input->post('name'),
				'agency_logo' => $this->input->post('agency_logo'),
				'fb_link' => $this->input->post('fb_link'),
				'linkedin_link' => $this->input->post('linkedin_link'),
				'twit_link' => $this->input->post('twit_link'),
				'gplus_link' => $this->input->post('gplus_link'),
				'youtube_link' => $this->input->post('youtube_link'),
				'address' => $this->input->post('address'),
				'created_on' => $this->input->post('created_on'),
				'property_list' => $this->input->post('property_list'),
            );
            
            $agency_id = $this->Agency_model->add_agency($params);
            redirect('agency/index');
        }
        else
        {            
            $data['_view'] = 'agency/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a agency
     */
    function edit($id)
    {   
        // check if the agency exists before trying to edit it
        $data['agency'] = $this->Agency_model->get_agency($id);
        
        if(isset($data['agency']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('name','Name','required|max_length[255]');
			$this->form_validation->set_rules('agency_logo','Agency Logo','max_length[255]');
			$this->form_validation->set_rules('fb_link','Fb Link','max_length[255]');
			$this->form_validation->set_rules('linkedin_link','Linkedin Link','max_length[255]');
			$this->form_validation->set_rules('twit_link','Twit Link','max_length[255]');
			$this->form_validation->set_rules('gplus_link','Gplus Link','max_length[255]');
			$this->form_validation->set_rules('youtube_link','Youtube Link','max_length[255]');
			$this->form_validation->set_rules('address','Address','required|max_length[255]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'name' => $this->input->post('name'),
					'agency_logo' => $this->input->post('agency_logo'),
					'fb_link' => $this->input->post('fb_link'),
					'linkedin_link' => $this->input->post('linkedin_link'),
					'twit_link' => $this->input->post('twit_link'),
					'gplus_link' => $this->input->post('gplus_link'),
					'youtube_link' => $this->input->post('youtube_link'),
					'address' => $this->input->post('address'),
					'created_on' => $this->input->post('created_on'),
					'property_list' => $this->input->post('property_list'),
                );

                $this->Agency_model->update_agency($id,$params);            
                redirect('agency/index');
            }
            else
            {
                $data['_view'] = 'agency/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The agency you are trying to edit does not exist.');
    } 

    /*
     * Deleting agency
     */
    function remove($id)
    {
        $agency = $this->Agency_model->get_agency($id);

        // check if the agency exists before trying to delete it
        if(isset($agency['id']))
        {
            $this->Agency_model->delete_agency($id);
            redirect('agency/index');
        }
        else
            show_error('The agency you are trying to delete does not exist.');
    }
    
}
