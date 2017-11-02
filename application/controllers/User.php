<?php

class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    } 

    /*
     * Listing of user
     */
    function index()
    {
        $data['user'] = $this->User_model->get_all_user();
        
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('password','Password','required|max_length[255]');
		$this->form_validation->set_rules('username','Username','required|max_length[255]');
		$this->form_validation->set_rules('email','Email','required|max_length[255]|valid_email');
		//$this->form_validation->set_rules('usertype','Usertype','required|max_length[255]');
		//$this->form_validation->set_rules('created_on','Created On','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'password' => $this->input->post('password'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'usertype' => 'user',
				'created_on' => date('Y-m-d h:i:s'),
				'payment_details' => $this->input->post('payment_details'),
				'myfavorites' => $this->input->post('myfavorites'),
            );
            $user_data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
            );
            $check_user = $this->User_model->check_user($user_data); //var_dump($check_user); die();
            if($check_user > 0)
            {
                $this->session->set_flashdata('successsub', "Username or email already exists");
                $data['_view'] = 'user/add';
                $this->load->view('layouts/main',$data);
            }
            else
            {
                $user_id = $this->User_model->add_user($params);
                redirect('user/index');
            }
        }
        else
        {            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($userid)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($userid);
        
        if(isset($data['user']['userid']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('password','Password','required|max_length[255]');
			$this->form_validation->set_rules('username','Username','required|max_length[255]');
			$this->form_validation->set_rules('email','Email','required|max_length[255]|valid_email');
			$this->form_validation->set_rules('usertype','Usertype','required|max_length[255]');
			$this->form_validation->set_rules('created_on','Created On','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'password' => $this->input->post('password'),
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'usertype' => $this->input->post('usertype'),
					'created_on' => $this->input->post('created_on'),
					'payment_details' => $this->input->post('payment_details'),
					'myfavorites' => $this->input->post('myfavorites'),
                );

                $this->User_model->update_user($userid,$params);            
                redirect('user/index');
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($userid)
    {
        $user = $this->User_model->get_user($userid);

        // check if the user exists before trying to delete it
        if(isset($user['userid']))
        {
            $this->User_model->delete_user($userid);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }

    function add_note()
    {   
        $user_note = array(
            'usernote' => $this->input->post('usernote')
        );
        $this->User_model->add_note($user_note);            
        
            
    } 
    
}
