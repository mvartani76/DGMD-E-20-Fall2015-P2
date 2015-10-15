<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
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
  <form id="register_id" action="" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
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