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

       // $this->form_validation->set_rules('field[]', 'The field', 'numeric|xss_clean');
		$this->form_validation->set_rules('package_name','Package Name','alpha','max_length[60]', 'required' );
		$this->form_validation->set_rules('package_price','Package Price','numeric|xss_clean' , 'required');
       $this->form_validation->set_rules('num_listing_limit','Num Listing Limit','numeric|xss_clean','required');
        $this->form_validation->set_rules('num_featured_limit','num_featured_limit','numeric|xss_clean',  'required');
		$this->form_validation->set_rules('user_type', 'User Type','required');
		$this->form_validation->set_rules('package_durations','Package Duration','required');
		//$this->form_validation->set_rules('show_private_listings','Num Images Limit','integer');
       // $this->form_validation->set_rules('auto_activation','auto_activation','integer');
		//$this->form_validation->set_rules('package_days','package_days','integer');
		
		
        if($this->input->post() && $this->form_validation->run() == TRUE)     
        
        {   
            $addition = $this->input->post('package_durations');
            $addition2 = $this->input->post('package_days');
            $listing  = $this->input->post('num_listing_limit');

           if($listing == 0)
           {
               $listing = 100000;
           }
           else
           {
                $listing  = $this->input->post('num_listing_limit');
           }
            if($addition == "yearly")
            {    
                $end_date = date('y-m-d', strtotime("+365 days"));
            }
            else if($addition == "monthly")
            {    
                $end_date = date('y-m-d', strtotime("+30 days"));
            }
            else if($addition == "weekly")
            {    
                $end_date = date('y-m-d', strtotime("+7 days"));
            }
            else
            {    
                $end_date = date('y-m-d', strtotime("+" .$addition2 . "days"));
            }
            $params = array(

                // my pkg detail
                'package_name' => $this->input->post('package_name'),
                'package_price' => $this->input->post('package_price'),
                'start_date' => date('y-m-d'),
                'end_date' => $end_date,
                'num_listing_limit' => $listing,
                'num_featured_limit' => $this->input->post('num_featured_limit'),
                'user_type' => $this->input->post('user_type'),
                'package_duration' => $this->input->post('package_durations'),
                'show_private_listings' => $this->input->post('show_private_listings'),
                
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
                    'start_date' => $this->input->post('date_created'),
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
