<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payment Tracking Home</title>
  <link href="./css/menu.css" rel="stylesheet">
  <link href="./css/contactform.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
    <div class="container">
    <?php include("./include/menu.php");?>
  </div>
</div>

<div class="contactcontainer">  
  <form id="contact" action="" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset><input placeholder="First Name" type="text" tabindex="1" required autofocus></fieldset>
    <fieldset><input placeholder="Last Name" type="text" tabindex="2" required autofocus></fieldset>
    <fieldset><input placeholder="Your Email Address" type="email" tabindex="3" required></fieldset>
    <fieldset><input placeholder="Your Phone Number" type="tel" tabindex="4" required></fieldset>
    <fieldset><input placeholder="Your Web Site starts with http://" type="url" tabindex="5">
    </fieldset>
	<fieldset><h4>What type of message do you want to send?</h4>
	    <input type="radio" name="dept" value="general" tabindex="6" checked> General
	    <input type="radio" name="dept" value="sales" tabindex="7"> Sales
	    <input type="radio" name="dept" value="marketing" tabindex="8"> Marketing
	    <input type="radio" name="dept" value="technical" tabindex="9"> Technical
	</fieldset>
    <fieldset><textarea placeholder="Type your Message Here...." tabindex="10" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>

</div>
</body>
</html>