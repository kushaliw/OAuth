<?php

require_once('pinterest-api.php');

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="./form5.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap-social.css">

    <title>Login</title>
  </head>
  <body>
   
	
	<div id="main">
	  <div id="first">
	    <form action="" method="post">
		  <h1><center>Welcome</center></h1>
		  <h4><center>Please login to continue</center></h4> <hr/>
		  	<label>Username </label><br/>
		  	<input name="username" placeholder="Enter your username"><br/>	

		  	<label>Password </label><br/>
		  	<input name="password" placeholder="Enter your Password"> <br/>	
		  
			<input type="submit" value="Login">
			<center>or continue with </center><br/>
			
			<a href="<?= 'https://api.pinterest.com/oauth/?client_id=' . PINTEREST_APPLICATION_ID . '&redirect_uri=' . urlencode(PINTEREST_REDIRECT_URI) . '&response_type=code&scope=read_public' ?>" class="btn btn-block btn-social btn-pinterest">

			<span class="fa fa-pinterest"></span><center>Sign in with Pinterest</center>
			</a>
			
	    </form>
	  </div>
	  
	 
    </div>  

  </body>
</html>