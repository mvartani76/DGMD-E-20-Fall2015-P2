<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="./css/menu.css" rel="stylesheet">
  <link href="./css/formstyle.css" rel="stylesheet">
  <link href="./css/services.css" rel="stylesheet">
  <link href="./css/footer.css" rel="stylesheet">  
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>    
</head>
<body>
    <div class="wrapper">
      <div class="container">
        <ul class="menu">
          <li><a href="./index.php">Home</a></li>
          <li><a href="./services.php">Services</a></li>
          <li class="active"><a href="./login.php">Login</a></li>
          <li><a href="./register.php">Register</a></li>
          <li><a href="./contact.php">Contact</a></li>
        </ul>
      </div>
    </div>

	<div class="logincontainer">  
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