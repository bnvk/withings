<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:			Social Igniter : Withings : Controller
* Author: 		Brennan Novak
* 		  		hi@brennannovak.com
* 
* Project:		http://social-igniter.com
* 
* Description: This file is for the public Withings Controller class
*/
class Withings extends Site_Controller
{
    function __construct()
    {
        parent::__construct();       
	}
	
	function index()
	{
		$this->data['page_title'] = 'Withings';
		$this->render();
	}

	function view() 
	{		
		// Basic Content Redirect	
		$this->render();
	}
	
}
