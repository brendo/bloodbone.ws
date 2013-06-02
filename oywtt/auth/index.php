<?php

	$client_id = '8303da985ab84ee399334bfc0ab0628e';
	$client_secret = '6c0bf320702c4d8eaf006bd547323cf5';
	$redirect_uri = 'http://bloodbone.ws/oywtt/auth/';

	/**
	 * Handles the response from Instagram for a user.
	 */

	// Handle failure
	if(!isset($_REQUEST['code'])) {
		header('Content-Type: application/json');

		$error = array(
			'error_reason' => $_REQUEST['error_reason'],
			'error_description' => $_REQUEST['error_description']
		);

		echo json_encode($error);
		exit;
	}

	// Handle success
	$token_request = array(
		'client_id' => $client_id,
		'client_secret' => $client_secret,
		'grant_type' => 'authorization_code',
		'redirect_uri' => $redirect_uri,
		'code' => $_REQUEST['code']
	);

	$ch = curl_init('https://api.instagram.com/oauth/access_token');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $token_request);

