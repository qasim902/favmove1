<?php
function customFlash($url, $class, $message)
{
	$ci = & get_instance();
	$ci->load->helper('url');
	$ci->load->library('session');
	$ci->session->set_flashdata('class', $class);
	$ci->session->set_flashdata('error', $message);
	redirect($url);	
}
?>