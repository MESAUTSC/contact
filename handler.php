<!DOCTYPE html>
<html>
<head>
hello testimonial
<script language="JavaScript" src="gen_validatorv31.js" type="text/javascript"></script>
</head>

<body>

  <form method="POST" name="contactform" action="contact-form-handler.php">
  <p>
  <label for='name'>Your Name:</label> <br>
  <input type="text" name="name">
  </p>
  <p>
  <label for='email'>Email Address:</label> <br>
  <input type="text" name="email"> <br>
  </p>
  <p>
  <label for='message'>Message:</label> <br>
  <textarea name="message"></textarea>
  </p>
  <input type="submit" value="Submit"><br>
  </form>

  <script language="JavaScript">
  var frmvalidator  = new Validator("contactform");
  frmvalidator.addValidation("name","req","Please provide your name");
  frmvalidator.addValidation("email","req","Please provide your email");
  frmvalidator.addValidation("email","email","Please enter a valid email address");
  </script>

</body>

</html>
