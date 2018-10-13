<?php
session_start();

require_once('pinterest-api.php');
require_once('pinterest-login.php');

// Pinterest passes a parameter 'code' in the Redirect Url



if(isset($_GET['code'])) {
	try {
		$pinterest_ob = new PinterestApi();
		
		// Get the access token 
		$access_token = $pinterest_ob->GetAccessToken(PINTEREST_APPLICATION_ID, PINTEREST_REDIRECT_URI, PINTEREST_APPLICATION_SECRET, $_GET['code']);
		
		// Get user information
		$user_info = $pinterest_ob->GetUserProfileInfo($access_token);

		// Echo user information for display
		$html='<html> <head> ';
		$html .='<link rel="stylesheet" type="text/css" href="./profile.css">';
		$html .='</head> <body> ';
		
		$html .= '<h2 style="text-align:center">User Profile</h2>';
			$html .= '<div class="card">';
				$html .='<img src="' . $user_info['image']['60x60']['url'].'"  style="width:35%">';
			
				$html .= '<h1> '. $user_info['first_name'] .' '. $user_info['last_name']. '</h1>';
			
			$html .= '<p class="title"> '. $user_info['username'] . '</p>';
			$html .= '<p class="title"> '. $user_info['id'] . '</p>';
			$html .='<p><button>Proceed</button></p>';
		$html .= '</div> </body> </html>';
		echo $html;
		
		$html = '';

	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit;
	}
}

?>