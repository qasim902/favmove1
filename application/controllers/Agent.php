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
       // $data['agent'] = $this->Admin_model->get_agent($id);
        // check if the agent exists before trying to edit it
        $data['agent'] = $this->Agent_model->get_agent($id);
        
        if(isset($data['agent']['userid']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'title' => $this->input->post('title'),
                    'fname' => $this->input->post('fname'),
                    'lname' => $this->input->post('lname'),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'description' => $this->input->post('description'),
                    'image' => $this->input->post('image'),
                    'address' => $this->input->post('address'),
                    'phone' => $this->input->post('ag_phone'),
                    'fblink' => $this->input->post('fblink'),
                    'twiterlink' => $this->input->post('tgpluslinkwiterlink'),
                    'gpluslink' => $this->input->post('gplus_link'),
                    'linkedin' => $this->input->post('linkedin'),
                    'youtubelink' => $this->input->post('youtubelink'),
                    'pintrestlink' => $this->input->post('pintrestlink'),
                    'instagramlink' => $this->input->post('instagramlink'),
                    'package' => $this->input->post('package'),
                );
                $path = realpath(APPPATH. '../resources/img/agents/');
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '5000';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
        
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('image')) 
                {
                    $error = $this->upload->display_errors(); 
                   echo  $this->session->set_flashdata('successsub', $error);
                   redirect('agent/index');

                }
                else
                {
                    $filename = $this->upload->data();
                    $data['image'] = $filename['file_name'];
                    $this->Agent_model->update_agent($id,$params);            
                    redirect('agent/index');
                }
            }
            else
            {
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
    function remove()
    {
        $id = $this->input->get('id');
        $agent = $this->Agent_model->get_agent($id);

        // check if the agent exists before trying to delete it
        if(isset($agent['userid']))
        {
            $this->Agent_model->delete_agent($id);
            redirect('agent/index');
        }
        else
            show_error('The agent you are trying to delete does not exist.');
    }

    function addnewagent()
    {
        
            $this->load->library('form_validation');
            // $this->form_validation->set_rules('title','Title', 'required' );
          $this->form_validation->set_rules('fname','First Name', 'alpha','max_length[60]','required' );
            $this->form_validation->set_rules('lname','Last Name','alpha', 'max_length[60]','required' );
           $this->form_validation->set_rules('username','User Name' ,'max_length[60]', 'required');
         //  $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[agents.email]');    
            $this->form_validation->set_rules('password','Password','max_length[60]','required');
            $this->form_validation->set_rules('description', 'Description','required');
             $this->form_validation->set_rules('address','Address','required');
           // $this->form_validation->set_rules('ag_phone','Phone','required','max_length[15]');
        //     $this->form_validation->set_rules('fb_link','Facebook Link','required');
        //     $this->form_validation->set_rules('twit_link','Twiter Link','required');
        //     $this->form_validation->set_rules('gplus_link','Google Plus Link','required');
        //     $this->form_validation->set_rules('li_link','LinkedIn Link','required');
        //     $this->form_validation->set_rules('you_link','Youtube Link','required');
        //    $this->form_validation->set_rules('pin_link','Pintrest Link','required');
        //     $this->form_validation->set_rules('insta_link','Instagram Link','required');
           //$this->form_validation->set_rules('package_id','Package', 'required');
        //&& $this->form_validation->run()
            if($this->input->post() && $this->form_validation->run())
            {
                $data = array(
                'title' => $this->input->post('title'),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'description' => $this->input->post('description'),
                'image' => $this->input->post('ag_image'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('ag_phone'),
                'fblink' => $this->input->post('fb_link'),
                'twiterlink' => $this->input->post('twit_link'),
                'gpluslink' => $this->input->post('gplus_link'),
                'linkedin' => $this->input->post('li_link'),
                'youtubelink' => $this->input->post('you_link'),
                'pintrestlink' => $this->input->post('pin_link'),
                'instagramlink' => $this->input->post('insta_link'),
                'package' => $this->input->post('package_id'),
                );
        
                $path = realpath(APPPATH. '../resources/img/agents/');
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '5000';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
        
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('user_file')) 
                {
                    $error = $this->upload->display_errors(); 
                   echo  $this->session->set_flashdata('successsub', $error);
                    //var_dump($error);
                    // $data['_view'] = 'user_login';
                    // $this->load->view('layout/main/', $data);
                    //var_dump('hello');  die();
                   // redirect('agent/add');
                }
                else
                {
                    $filename = $this->upload->data();
                    $data['image'] = $filename['file_name'];
                    $this->load->model('agent_model');
                    $ag_added = $this->agent_model->add_agent($data);
                    $this->session->set_flashdata('successsub', "Agent successfully added");
                    // $data['_view'] = 'user_reg';
                    // $data['_view'] = 'user_login';
                    // $this->load->view('layout/main/', $data);
                    redirect('agent/add');
                }    
            }
            else
            {
                // $data['_view'] = 'user_reg';
                // $this->load->view('layouts/main',$data);
                // $data['_view'] = 'user_login';
                // $this->load->view('layout/main/', $data);
                $error = validation_errors();
                $this->session->set_flashdata('successsub', $error);
                redirect('agent/add');
            }
            
            
        }

        function searchagent()
        {
            $town_id = $this->input->post('town_id');
            $agent_name = $this->input->post('agname');
            $this->load->model('agent_model');
            $result = $this->agent_model->searchagent($town_id, $agent_name);
            //var_dump($result); die();
            $data = array(
                'result' => $result,
                'assets' => base_url() . "resources/",
                '_view' => 'frontend/views/agent_search_result');
                $this->load->view('frontend/layouts/main',$data);


        }
    
    
}
