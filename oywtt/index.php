<?php

	$client_id = '8303da985ab84ee399334bfc0ab0628e';
	$client_secret = '6c0bf320702c4d8eaf006bd547323cf5';
	$redirect_uri = 'http://bloodbone.ws/oywtt/';

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oh, You Went There Too?</title>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.1.0/base-min.css">
		<link rel='stylesheet' href='http://yui.yahooapis.com/pure/0.1.0/pure-min.css' />
		<link rel='stylesheet' href='assets/css/app.css' />
	</head>
	<body>

		<div class='pure-g-r'>
			<div id='welcome' class='pure-u-1-2'>
				<h1>Oh, you went there too?</h1>
				<p>Compare your Instagram photo map with that of your friends.</p>

				<a href='https://instagram.com/oauth/authorize/?client_id=<?=$client_id?>&redirect_uri=<?=$redirect_uri?>&response_type=token'>Connect</a>
			</div>
		</div>

		<script src='assets/js/lib/zepto.min.js'></script>
		<script src='assets/js/lib/angular.min.js'></script>
		<script src='assets/js/app.js'></script>
	</body>
</html>