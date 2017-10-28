<?php

class Agent extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Agent_model');
    } 

    /*
     * Listing of agents
     */
    function index()
    {
        $data['agents'] = $this->Agent_model->get_all_agents();
        
        $data['_view'] = 'agent/index';
        $this->load->view('layouts/main',$data);
    }

    function sign_up()
    {

    }

    /*
     * Adding a new agent
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'package_id' => $this->input->post('package_id'),
				'agency_id' => $this->input->post('agency_id'),
				'password' => $this->input->post('password'),
				'name' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'agent_image' => $this->input->post('agent_image'),
				'property_list' => $this->input->post('property_list'),
				'last_logintime' => $this->input->post('last_logintime'),
				'added_date' => $this->input->post('added_date'),
				'address' => $this->input->post('address'),
				'activated' => $this->input->post('activated'),
				'package_lastpayment' => $this->input->post('package_lastpayment'),
				'last_editip' => $this->input->post('last_editip'),
				'payment_details' => $this->input->post('payment_details'),
				'description' => $this->input->post('description'),
            );
            
            $agent_id = $this->Agent_model->add_agent($params);
            redirect('agent/index');
        }
        else
        {
			$this->load->model('Package_model');
			$data['all_packages'] = $this->Package_model->get_all_packages();

			$this->load->model('Agency_model');
			$data['all_agency'] = $this->Agency_model->get_all_agency();
            
            $data['_view'] = 'agent/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a agent
     */
    function edit($id)
    {   
        // check if the agent exists before trying to edit it
        $data['agent'] = $this->Agent_model->get_agent($id);
        
        if(isset($data['agent']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'package_id' => $this->input->post('package_id'),
					'agency_id' => $this->input->post('agency_id'),
					'password' => $this->input->post('password'),
					'name' => $this->input->post('name'),
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'agent_image' => $this->input->post('agent_image'),
					'property_list' => $this->input->post('property_list'),
					'last_logintime' => $this->input->post('last_logintime'),
					'added_date' => $this->input->post('added_date'),
					'address' => $this->input->post('address'),
					'activated' => $this->input->post('activated'),
					'package_lastpayment' => $this->input->post('package_lastpayment'),
					'last_editip' => $this->input->post('last_editip'),
					'payment_details' => $this->input->post('payment_details'),
					'description' => $this->input->post('description'),
                );

                $this->Agent_model->update_agent($id,$params);            
                redirect('agent/index');
            }
            else
            {
				$this->load->model('Package_model');
				$data['all_packages'] = $this->Package_model->get_all_packages();

				$this->load->model('Agency_model');
				$data['all_agency'] = $this->Agency_model->get_all_agency();

                $data['_view'] = 'agent/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The agent you are trying to edit does not exist.');
    } 

    /*
     * Deleting agent
     */
    function remove($id)
    {
        $agent = $this->Agent_model->get_agent($id);

        // check if the agent exists before trying to delete it
        if(isset($agent['id']))
        {
            $this->Agent_model->delete_agent($id);
            redirect('agent/index');
        }
        else
            show_error('The agent you are trying to delete does not exist.');
    }
    
}
