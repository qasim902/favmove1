<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class News extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
    } 

    /*
     * Listing of news
     */
    function index()
    {
        $data['news'] = $this->News_model->get_all_news();
        
        $data['_view'] = 'news/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new news
     */
    function add()
    {   
        
        $this->load->library('form_validation');

		$this->form_validation->set_rules('title','Title','required|max_length[255]');
		$this->form_validation->set_rules('added_on','Added On','required');
		$this->form_validation->set_rules('author','Author','required|max_length[255]');
		$this->form_validation->set_rules('comment_id','Comment Id','required|integer');
		$this->form_validation->set_rules('excerpt','Excerpt','required');
		$this->form_validation->set_rules('detail','Detail','required');
		$this->form_validation->set_rules('tags','Tags','required');
		$this->form_validation->set_rules('img_path','Img Path','required');
		
		if($this->input->post())     
        {   
            $params = array(
				'title' => $this->input->post('title'),				
                'author' => $this->input->post('author'),
                'added_on' => $this->input->post('added_on'),
				'image_path' => $this->input->post('img_path'),
				'detail' => $this->input->post('detail'),
				'tags' => $this->input->post('tags'),
            );
            
            $news_id = $this->News_model->add_news($params);
            $this->session->set_flashdata('successsub', "News successfully added");
            redirect('news/add');
        }
        else
        {            
            $data['_view'] = 'news/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a news
     */
    function edit($id)
    {   
        // check if the news exists before trying to edit it
        $data['news'] = $this->News_model->get_news($id);
        
        if(isset($data['news']['id']))
        {
            $this->load->library('form_validation');
            
                    $this->form_validation->set_rules('title','Title','required|max_length[255]');
                    $this->form_validation->set_rules('added_on','Added On','required');
                    $this->form_validation->set_rules('author','Author','required|max_length[255]');
                    $this->form_validation->set_rules('comment_id','Comment Id','required|integer');
                    $this->form_validation->set_rules('excerpt','Excerpt','required');
                    $this->form_validation->set_rules('detail','Detail','required');
                    $this->form_validation->set_rules('tags','Tags','required');
                    $this->form_validation->set_rules('img_path','Img Path','required');
		
			if($this->input->post())     
            {   
                $params = array(
					'title' => $this->input->post('title'),				
                    'author' => $this->input->post('author'),
                    'added_on' => $this->input->post('added_on'),
                    'image_path' => $this->input->post('img_path'),
                    'detail' => $this->input->post('detail'),
                    'tags' => $this->input->post('tags'),
                );

                $this->News_model->update_news($id,$params);  
                $this->session->set_flashdata('successsub', "News updated successfully");                
                redirect('news/index');
            }
            else
            {
                $data['_view'] = 'news/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The news you are trying to edit does not exist.');
    } 

    /*
     * Deleting news
     */
    function remove($id)
    {
        $news = $this->News_model->get_news($id);

        // check if the news exists before trying to delete it
        if(isset($news['id']))
        {
            $this->News_model->delete_news($id);
            redirect('news/index');
        }
        else
            show_error('The news you are trying to delete does not exist.');
    }
    
}
