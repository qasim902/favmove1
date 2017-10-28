<?php

class Mainag extends CI_Controller{
    

    function __construct()
    {
        parent::__construct();
        $this->load->model('Agent_model');
        $this->load->model('Agency_model');
        $this->load->model('Property_model');
        $this->load->model('Uk_town_model');
         if($this->session->userdata('userData'))
        {
            $this->role = $this->session->userdata('userData')['role'];
            $this->data['curr_login'] = $this->session->userdata('userData');
        }
        else
        {
            $this->role = 'public';
        }
        $this->load->model('Property_model');
        $this->load->model('Agent_model');
        $this->data['dropdown_props'] = $this->Property_model->get_all_property();
        $this->data['dropdown_agent'] = $this->Agent_model->get_all_agents();
        $this->data['defdata']['all_uk_towns'] = $this->Uk_town_model->get_all_uk_towns();
        $this->data += array(
            'assets' => base_url() . "resources/",
            'role' => $this->role
        );

        if ($this->role !='agent')
        {
        	redirect('/');
        }
        


    }

function home()
{
    $this->load->view('frontend/views/us_profile');
}


    function agentprof()
    {

        $curr_login = $this->session->userData('userData');
            
            $my_props = $this->Property_model->get_prop_where('agent_id', $curr_login['agentData']['AgentData']['id']);
            $my_inqs = $this->Agent_model->getinquiries($curr_login['agentData']['AgentData']['email']);
            $viewdata['my_inq'] = $my_inqs; 
            
            $viewdata['my_prop'] = $my_props; 
            $viewdata['agentdata'] = $curr_login['agentData']['AgentData']; 
            
         $data = $this->data;
            $data += array(
                'viewdata' => $viewdata,

            'curr_login' => $this->data['curr_login'],
            '_view' => 'frontend/views/ag_profile',
            
          
        );
        $this->load->view('frontend/layouts/main', $data);

    } 

    function user_home(){
        
        
        if ($this->role == 'agent')
        {
            $curr_login = $this->session->userData('userData');
            
            $my_props = $this->Property_model->get_prop_where('agent_id', $curr_login['agentData']['AgentData']['id']);
            
            $viewdata['my_prop'] = $my_props; 

            $viewdata['agentdata'] = $curr_login['agentData']['AgentData']; 
            

            $data = $this->data;
            $data += array(
                'viewdata' => $viewdata,
            'curr_login' => $curr_login,
            '_view' => 'frontend/views/my_prop',
            
          
        );
        $this->load->view('frontend/layouts/main', $data);
        }
        else 
        {
            redirect('/','refresh');
        }
    }




   
    






// Array ( [prop_id] => 1 

    // [property] => Array ( [prop_id] => 1 [town_id] => 1536 [title] => Historic Town House [excerpt] => dummy-excerpt [description] => Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat piscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placera tpiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing [address] => 987 CANTEBURY DRIVE [prop_details] => 1 [status] => rentd [property_images] => [features] => 1 [video_embed] => [agent_id] => 1 [created_on] => 2017-10-14 10:30:30 [sold_on] => 0000-00-00 00:00:00 [is_feat] => 0 [price] => 8600.00 [prop_type] => res [new_build] => 0 ) 

    // [agentdata] => Array ( [id] => 1 [name] => Aaron Kingheart [username] => agent1 [email] => hamza@gmail.com [password] => 12345 [description] => Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer. [agent_image] => [property_list] => [last_logintime] => 0000-00-00 00:00:00 [added_date] => 2017-10-01 21:58:38 [address] => [activated] => 0 [package_id] => 0 [package_lastpayment] => 0000-00-00 00:00:00 [agency_id] => 1 [last_editip] => [payment_details] => ) 

    // [features] => Array ( [prop_id] => 1 [AC] => 1 [Barbeque] => 1 [Dryer] => 1 [Laundry] => 1 [Microwave] => 1 [Lawn] => 1 [Shower] => 1 ) 

    // [prop_detail] => Array ( [prop_id] => 1 [bathrooms] => 7 [garage] => 2 [bedrooms] => 6 [area] => 5456 [lounge] => 2 [price] => 8600 ) )

    


// Array ( [title] => Easy your wat to the Global sotck [prop_type] => bus [address] => PO Box 402724 [town_id] => 1784 [status] => rent [area] => 28305 [bedrooms] => 7 [bathrooms] => 6 [lounge] => 6 [garage] => 7 [is_feat] => on [new] => on [description] => Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsmLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem [AC] => on [Barbeque] => on [Laundry_Room] => on ) 



 // [AgentData] => Array ( [id] => 1 [name] => Aaron Kingheart [username] => agent1 [email] => hamza@gmail.com [password] => 12345 [description] => Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer. [agent_image] => [property_list] => [last_logintime] => 0000-00-00 00:00:00 [added_date] => 2017-10-01 21:58:38 [address] => [activated] => 0 [package_id] => 0 [package_lastpayment] => 0000-00-00 00:00:00 [agency_id] => 1 [last_editip] => [payment_details] => ) ) 






    function submit_prop(){


        if ($this->input->post())
        {   


            //  print_r($_FILES);
            // echo "<br><br>";
            // print_r($this->input->post()); 
            // echo "<br><br>";echo "<br><br>";

            // $agent = $this->session->userData('userData');
            // print_r($agent); 
            // echo "<br><br>";echo "<br><br>";
            // $property = $this->input->post();
            // print_r($property); 
            // echo "<br><br>";echo "<br><br>";
            // // die();





            $agent = $this->session->userData('userData');
            $this->form_validation->set_rules('town_id','Town Id','required');
        $this->form_validation->set_rules('title','Title','required|max_length[255]');
        
        $this->form_validation->set_rules('address','Address','required|max_length[255]');
        
        $this->form_validation->set_rules('status','Status','max_length[255]');
        
        $this->form_validation->set_rules('video_embed','Video Embed','max_length[255]');
        
        $this->form_validation->set_rules('price','Price','required|numeric');
        $this->form_validation->set_rules('prop_type','Prop Type','required|max_length[15]');
        $this->form_validation->set_rules('description','Description','required');
        $this->form_validation->set_rules('yearb','Year Built','numeric|required|max_length[4]');
            $this->db->select_max('prop_id');
            $result= $this->db->get('property')->row_array();
            $id = ++$result['prop_id'];
            // echo $id;
            
        if($this->form_validation->run())     
        {   
            $params = array(
                'prop_id' => $id,
                'prop' =>   array(

                'town_id' => $this->input->post('town_id'),
                'agent_id' => $agent['agentData']['AgentData']['id'],
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
                'prop_details' => $id,
                'yearb' =>  $this->input->post('yearb')
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

                // print_r($_FILES);die();
             if (!file_exists('./resources/img/properties/'.$property_id.'/')) {
                mkdir('./resources/img/properties/'.$property_id.'/', 0777, true);
                }
            
            $config['upload_path'] = "./resources/img/properties/".$property_id."/";
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload');
            $files           = $_FILES;
            $number_of_files = count($_FILES['pic']['name']);
            $errors = 0;
            $_FILES['listing']['name'] = "cover.jpg";
            $this->upload->initialize($config);
             if (! $this->upload->do_upload("listing")) {
                    $errors++;
                } 
            for ($i = 0; $i < $number_of_files; $i++)
            {
                $_FILES['pic']['name'] = "details".$i.".jpg";
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
            redirect('agent_home','refresh');
           }
           else{
            die("error no insert");
           }


        }
        else {
            echo validation_errors('<div class="error">', '</div>');
        }
           
           
            

        //     $curr_login = $this->session->userData('userData');
            
        //     $my_props = $this->Property_model->get_prop_where('agent_id', $curr_login['agentData']['AgentData']['id']);
            
        //     $viewdata['my_prop'] = $my_props; 
            
        //     $viewdata['agentdata'] = $curr_login['agentData']; 

        //     $data = $this->data;
        //     $data += array(
        //         'viewdata' => $viewdata,
        //     'curr_login' => $curr_login,
        //     'assets' => base_url() . "resources/",
        //     '_view' => 'frontend/views/my_prop',
        //     'role' => 'agent'
          
        // );
        // $this->load->view('frontend/layouts/main', $data);
        
        
        }
        else
        {

            $data = $this->data;
            $data += array(
            'assets' => base_url() . "resources/",
            '_view' => 'frontend/views/submit_prop',
            'role' => 'agent'
          
        );
             $this->load->view('frontend/layouts/main', $data);
            
        }
    }
    function addtofav()
{
    echo "doing";
}
}