<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>
  <div class="header">
  	<h2>House Booking</h2>
  </div>
	
  <form method="post" action="booking.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Phone</label>
  	  <input type="tel" name="phone" value="+254 7">
  	</div>
  	<div class="input-group">
  	  <label>Property</label>
  	  <input type="text" name="address">
  	</div>
	<div class="input-group">
  	  <label>Housing</label>
  	  <input type="text" name="house">
  	</div>
	<div class="input-group">
  	  <label>Vacancy</label>
  	  <input type="text" name="house">
  	</div>
	<div class="input-group">
  	  <label>Payment</label>
		</div>
		<div class="input-group">
		<select name="payment" class="form-control">
		<option selected>Method of Payment</option>
			<option>Mpesa</option>
			<option>Credit Card</option>
		</select>
  	</div>
	  </div>
	  </div>


	  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
       I Agree to terms & Conditions of Management
      </label>
    </div>
  </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="book">Book House</button>
  	</div>

    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
  	<p>
  		For More Info or Enquiries <a href="contact.php">Contact Us</a>
  	</p>
  </form>
</body>
</html>