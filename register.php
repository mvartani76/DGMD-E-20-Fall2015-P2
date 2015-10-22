<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
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
          <li><a href="./login.php">Login</a></li>
          <li class="active"><a href="./register.php">Register</a></li>
          <li><a href="./contact.php">Contact</a></li>
        </ul>
      </div>
    </div>

<div class="registercontainer">  
  <form id="register_id" action="" method="post">
    <h3>Registration</h3>
    <h4>Please fill out the information below to register with my site...</h4>
    <fieldset><input placeholder="First Name" type="text" tabindex="1" required autofocus></fieldset>
    <fieldset><input placeholder="Last Name" type="text" tabindex="2" required autofocus></fieldset>
    <fieldset><input placeholder="Street Address 1" type="text" tabindex="3" required autofocus></fieldset>
    <fieldset><input placeholder="Street Address 2" type="text" tabindex="4" autofocus></fieldset>
    <fieldset><input placeholder="City" type="text" tabindex="5" required autofocus></fieldset>
    <fieldset><input placeholder="State/Province" type="text" tabindex="6" required autofocus></fieldset>
    <fieldset><input placeholder="Zip Code / Postal Code" type="text" tabindex="7" required autofocus></fieldset>
    <fieldset><input placeholder="Country" type="text" tabindex="8" required autofocus></fieldset>    
    <fieldset><input placeholder="Your Email Address" type="email" tabindex="9" required></fieldset>
    <fieldset><input placeholder="Your Phone Number" type="tel" tabindex="10" required></fieldset>
    <fieldset><input placeholder="Your Web Site starts with http://" type="url" tabindex="11"></fieldset>
    <fieldset>
      <button name="submit" type="submit" id="register-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>

</div>
</body>
</html>