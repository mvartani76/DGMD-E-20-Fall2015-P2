<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="./css/menu.css" rel="stylesheet">
  <link href="./css/formstyle.css" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<?php include("./include/menu.php");?>
  		</div>
	</div>

	<div class="contactcontainer">  
		<form id="login_id" action="" method="post">
			<h3>Login</h3>
    		<h4>Please enter your username and password to login...</h4>
    		<fieldset><input placeholder="Username" type="text" tabindex="1" required autofocus></fieldset>
    		<fieldset><input placeholder="Password" type="password" tabindex="2" required autofocus></fieldset>
    		<fieldset>
      		<button name="submit" type="submit" id="login_id-submit" data-submit="...Sending">Submit</button>
    		</fieldset>
  		</form>
	</div>
</body>
</html>