<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'main';
$route['properties'] = 'main/properties';
$route['agents'] = 'main/agents';
$route['agent_detail'] = 'main/agent_detail';
$route['inboxagent'] = 'main/inboxag';
$route['admin'] = 'admin/index';
$route['admin_login'] = 'main/adlogin';
$route['user_login'] = 'main/uslogin';
$route['search'] = 'main/search';
$route['property_detail'] = 'main/prop_detail';
$route['logout'] = 'main/logout';
$route['mail'] = 'main/sendemail';
$route['news'] = 'main/news';
$route['add'] = 'news/add';
$route['contactus'] = 'main/contact_us';
$route['news_detail'] = 'main/news_detail';
$route['agent_home'] = 'mainag/agenthome';
$route['user_home'] = 'main/home';
$route['ag_submit'] = 'mainag/submit_prop';
$route['agprof'] = 'mainag/agentprof';
$route['aboutus'] = 'main/aboutus';
$route['contact_submit'] = 'main/contact_submit';
$route['subscribe'] = 'main/subscribe';
$route['user_reg'] = 'main/user_reg';
$route['ag_signup'] = 'main/agent_reg';
$route['selectpackage'] = 'main/makepayments';
$route['userinquiry'] = 'main/makeinquiry';
$route['agmyfavs'] = 'mainag/myfavs';
$route['addtofav'] = 'main/userfav';
$route['usfav'] = 'main/showfav';
$route['prop_eval'] = 'main/property_eval';
$route['updateuser'] = 'main/upuser';
$route['agentquery'] = 'main/agent_query';
$route['contactag'] = 'main/contactagent';
$route['allpackages'] = 'package/showpakage';
$route['addagent'] = 'mainag/addnewagent';
$route['printpro'] = 'property/printproperty';
$route['added'] = 'package/mypkg';

/*
$route['addtofav'] will write in form or anchor tag.
'main/userfav' controller and function name
*/



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
