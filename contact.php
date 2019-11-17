<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="header">
  	<h2>Contact Us</h2>
  </div>

  <form method="post" action="booking.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
      <div class="input-group">
  	  <label>Leave us A Message</label>
  	  <input type="text" name="message">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="contact">Contact Us</button>
  	</div>

    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
  	<p>
  		Not yet a Member? <a href="register.php">Sign Up</a>
  	</p>
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;


  <div class="social icons">
                <a class="social-icon" href="https://api.whatsapp.com/send?phone=254791329662" data-toggle="tooltip" data-placement="bottom" title="WhatsApp Messenger"><i class="fa fa-whatsapp fa-2x"></i></a>
                <a class="social-icon" href="https://www.facebook.com/" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook fa-2x"></i></a>
                <a class="social-icon" href="https://twitter.com/" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter fa-2x"></i></a>
                <a class="social-icon" href="https://www.instagram.com/_.algorithm_/" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram fa-2x"></i></a>
                <a class="social-icon" href="mailto:kennzau2018@gmail.com" data-toggle="tooltip" data-placement="bottom" title="Mail"><i class="fa fa-envelope fa-2x"></i></a>
</div>
            
  </form>
  



</body>
</html>