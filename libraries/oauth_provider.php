<?php

class OAuth_Provider_Withings extends OAuth_Provider {

	public $name = 'withings';
	public $uid_key = 'user_id';

	public function url_request_token()
	{
		return 'https://oauth.withings.com/account/request_token';
	}

	public function url_authorize()
	{
		return 'https://oauth.withings.com/account/authorize';
	}

	public function url_access_token()
	{
		return 'https://oauth.withings.com/account/access_token';
	}

	public function get_user_info(OAuth_Consumer $consumer, OAuth_Token $token)
	{
		// Create a new GET request with the required parameters
		$request = OAuth_Request::forge('resource', 'GET', 'http://wbsapi.withings.net/measure?action=getmeas&userid=933243', array(
			'oauth_consumer_key' 	=> $consumer->key,
			'oauth_token' 			=> $token->access_token
		));

		// Sign the request using the consumer and token
		$request->sign($this->signature, $consumer, $token);

		$activities = $request->execute();

		// Create a response from the request
		return $activities;
	}


} // End Provider_withings