$<?php

class Mainur extends CI_Controller
{
	
	function addfav()
	{
		$town = $this->input->post('town_id');
		$propertyType = $this->input->post('prop_type');
		$propertyStat = $this->input->post('prop_stat');
		$minPrice = $this->input->post('min_price');
		$maxPrice = $this->input->post('max_price');
		$data = array(
			'town' =>$town, 
			'propertyType' =>$propertyType, 
			'PropertyState' =>$propertyStat, 
			'MinPrice' =>$minPrice, 
			'MaxPrice'=> $maxPrice,
		);

		$this->load->model('User_model');
		$submitmove = $this->User_model->MyRightMove($data); 
		if($submitmove)
		{
			//redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function userinquiry()
	{
/*		$msg[] = $this->input->post('message');; 
        $to = "favouritemove@gmail.com";
        $from = $this->input->post('email');
        $CC= "";
        $sub= "User inquiry message";

        $this->sendemail($msg, $to, $from, $CC, $sub);*/
		
		$inqdata = array(
			'fullname' =>$this->input->post('fullname'),
			'email' =>$this->input->post('email'),
			'phone' =>$this->input->post('phone'),
			'postcode' =>$this->input->post('postcode'),
			'message' =>$this->input->post('message'),
			'useroption' =>$this->input->post('useroption'),
			'favmoveInfo' =>$this->input->post('favmoveInfo'),
			'mailcopy' =>$this->input->post('mailcopy'),
			'currServices' =>$this->input->post('currServices'),
			'agentemail' => $this->input->post('agemail'),
			'agentid' => $this->input->post('agid'),
		);
		$this->load->model('User_model');
		$submitmove = $this->User_model->addinquiry($inqdata);
		redirect($_SERVER['HTTP_REFERER']); 
	}
}

?>