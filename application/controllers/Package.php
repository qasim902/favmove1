<?php

 
class Package extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Package_model');
    } 

    /*
     * Listing of packages
     */
    function index()
    {
        $data['packages'] = $this->Package_model->get_all_packages();
        
        $data['_view'] = 'package/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new package
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('package_name','Package Name','max_length[60]');
		$this->form_validation->set_rules('package_price','Package Price','numeric');
		$this->form_validation->set_rules('date_created','date_created','integer');
        $this->form_validation->set_rules('num_listing_limit','Num Listing Limit','integer');
        $this->form_validation->set_rules('num_featured_limit','num_featured_limit','integer');
		$this->form_validation->set_rules('user_type','user_type','max_length[45]');
		$this->form_validation->set_rules('package_durations','User Type','max_length[45]');
		$this->form_validation->set_rules('show_private_listings','Num Images Limit','integer');
        $this->form_validation->set_rules('auto_activation','auto_activation','integer');
		$this->form_validation->set_rules('package_days','package_days','integer');
		
		
		if($this->input->post())     
        {   
            $params = array(
				// 'show_private_listings' => $this->input->post('show_private_listings'),
				// 'auto_activation' => $this->input->post('auto_activation'),
				// 'date_created' => $this->input->post('date_created'),
				// 'date_modified' => $this->input->post('date_modified'),
				// 'package_name' => $this->input->post('package_name'),
				// 'package_price' => $this->input->post('package_price'),
				// 'package_days' => $this->input->post('package_days'),
				// 'num_listing_limit' => $this->input->post('num_listing_limit'),
				// 'currency_code' => $this->input->post('package_days'),
				// 'user_type' => $this->input->post('user_type'),
				// 'num_images_limit' => $this->input->post('num_images_limit'),
				// 'num_amenities_limit' => $this->input->post('num_amenities_limit'),
				// 'num_featured_limit' => $this->input->post('num_featured_limit'),
                // 'forarea' => $this->input->post('show_private_listings'),
                
                // my pkg detail
                'package_name' => $this->input->post('package_name'),
                'package_price' => $this->input->post('package_price'),
                'date_created' => $this->input->post('date_created'),
                'num_listing_limit' => $this->input->post('num_listing_limit'),
                'num_featured_limit' => $this->input->post('num_featured_limit'),
                'user_type' => $this->input->post('user_type'),
                'package_duration' => $this->input->post('package_durations'),
                'show_private_listings' => $this->input->post('show_private_listings'),
                'auto_activation' => $this->input->post('auto_activation'),
                'package_days' => $this->input->post('package_days'),


            );
           // var_dump($params); die();
            $package_id = $this->Package_model->add_package($params);
            $this->session->set_flashdata('successsub', "Package added successfully");
            redirect('package/add');
        }
        else
        {           
            $data['_view'] = 'package/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a package
     */
    function edit($id)
    {   
        // check if the package exists before trying to edit it
        $data['package'] = $this->Package_model->get_package($id);
        
        if(isset($data['package']['packageid']))
        {
            $this->load->library('form_validation');
            
                    $this->form_validation->set_rules('package_name','Package Name','max_length[60]');
                    $this->form_validation->set_rules('package_price','Package Price','numeric');
                    $this->form_validation->set_rules('date_created','date_created','integer');
                    $this->form_validation->set_rules('num_listing_limit','Num Listing Limit','integer');
                    $this->form_validation->set_rules('num_featured_limit','num_featured_limit','integer');
                    $this->form_validation->set_rules('user_type','user_type','max_length[45]');
                    $this->form_validation->set_rules('package_durations','User Type','max_length[45]');
                    $this->form_validation->set_rules('show_private_listings','Num Images Limit','integer');
                    $this->form_validation->set_rules('auto_activation','auto_activation','integer');
                    $this->form_validation->set_rules('package_days','package_days','integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
                    'package_name' => $this->input->post('package_name'),
                    'package_price' => $this->input->post('package_price'),
                    'date_created' => $this->input->post('date_created'),
                    'num_listing_limit' => $this->input->post('num_listing_limit'),
                    'num_featured_limit' => $this->input->post('num_featured_limit'),
                    'user_type' => $this->input->post('user_type'),
                    'package_duration' => $this->input->post('package_durations'),
                    'show_private_listings' => $this->input->post('show_private_listings'),
                    'auto_activation' => $this->input->post('auto_activation'),
                    'package_days' => $this->input->post('package_days'),
                );

                $this->Package_model->update_package($id,$params); 
                $this->session->set_flashdata('successsub', "Package successfully updated");           
                redirect('package/index');
            }
            else
            {
                $data['_view'] = 'package/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The package you are trying to edit does not exist.');
    } 

    /*
     * Deleting package
     */
    function remove($id)
    {
        $package = $this->Package_model->get_package($id);

        // check if the package exists before trying to delete it
        if(isset($package['id']))
        {
            $this->Package_model->delete_package($id);
            redirect('package/index');
        }
        else
            show_error('The package you are trying to delete does not exist.');
    }
    function showpakage()
    {
        $this->load->model('package_model');
        $allpkg = $this->package_model->get_all_packages();
        $data = array('pkg'=>$allpkg);
        $this->load->view('frontend/views/login', $data);
        

    }
    
    
}
