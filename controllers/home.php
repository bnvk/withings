<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:			Social Igniter : Withings : Home Controller
* Author: 		Brennan Novak
* 		  		hi@brennannovak.com
* 
* Project:		http://social-igniter.com
* 
* Description: This file is for the Withings Home Controller class
*/
class Home extends Dashboard_Controller
{
    function __construct()
    {
        parent::__construct();

		$this->load->config('config');

		$this->data['page_title'] = 'Withings';
	}
	
	function weight()
	{

		// Basic Content Redirect
        $this->load->library('oauth');

        // Create Consumer
        $consumer = $this->oauth->consumer(array(
            'key' 	 	=> config_item('withings_consumer_key'),
            'secret' 	=> config_item('withings_consumer_secret')
        ));

        // Load Provider
        $withings = $this->oauth->provider('withings');

        // Create Tokens
		$tokens = OAuth_Token::forge('request', array(
			'access_token' 	=> '66d5730c7634dc9f675ec45424f0530728c19d220314fde3f8e8f884d23',
			'secret' 		=> '70d424406b7c4e58191564210347cf422e9b7e77b81e2f415ecf6c6b4f8641d'
		));

		$withings_data = $withings->get_user_info($consumer, $tokens);

		echo '<pre>';
		print_r($withings_data);		
		
	
	
		//$this->data['sub_title'] = 'Custom';
		//$this->render();
	}
}