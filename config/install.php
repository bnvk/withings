<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:			Social Igniter : Withings : Install
* Author: 		Brennan Novak
* 		  		hi@brennannovak.com
*          
* Project:		http://social-igniter.com/
*
* Description: 	Installer values for Withings for Social Igniter 
*/

/* Settings */
$config['withings_settings']['widgets'] 			= 'TRUE';
$config['withings_settings']['enabled']				= 'TRUE';
$config['withings_settings']['consumer_key'] 		= '';
$config['withings_settings']['consumer_secret'] 	= '';
$config['withings_settings']['social_connection'] 	= 'TRUE';
$config['withings_settings']['connections_redirect']= 'settings/connections/';
$config['withings_settings']['archive']				= '';

/* Sites */
$config['withings_sites'][] = array(
	'url'		=> 'http://withings.com/', 
	'module'	=> 'withings', 
	'type' 		=> 'remote', 
	'title'		=> 'Withings', 
	'favicon'	=> 'http://withings.com/favicon.ico'
);