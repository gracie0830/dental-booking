<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
</head>
<body>
<?php
		$title = "DenTEETH";
		include('header.html');
	?>

<div class="app"><!--start app here-->
	<p>
		Appointments:
		<button class="app-but"><a href="#booknow" class="app-but">Book Appointment</a></button>
		<button class="app-but"><a href="#reapp" class="app-but">Re-schedule Appointment</a></button>
		<button class="app-but"><a href="#cancelapp" class="app-but">Cancel Appointment</a></button>
	</p>

	<!--book appointment-->
	<div id="booknow" class="overlay">
	<div class="popup2">
		<h1>Book Now</h1>
		<hr>
		<a class="close" href="#">&times;</a>
		<div class="content">

	<form action="book_handle.php" method="POST" class="signup">
	<?php
		$today = date("F j, Y, g:i a"); 
		echo "$today";
	?>

	<p>
		<label>Date</label><br>
		<input type="date" name="bookdate" required>
	</p>

	<p>
		<label>Time</label><br>
		<input type="time" name="booktime" required>
	</p>

	<p>
		<label>Service</label>
		<select name="services">
			<option>Tooth Extraction</option>
			<option>Tooth Whitening</option>
			<option>Implants</option>
			<option>Veneers</option>
			<option>Bridges</option>
			<option>Crowns</option>
			<option>Root Canal</option>
			<option>Dentures</option>
			<option>Braces</option>
		</select>
	</p>

	<p class="reg-in">
	<input type="submit" value="Book Appointment" class="signup-sub" href="setappointment.php">
	</p>
	
	</form>
	</div>
	</div>
</div>

<!--re-schedule appointment-->
<div id="reapp" class="overlay">
	<div class="popup2">
		<h1>Re-schedule <br>Appointment</h1>
		<hr>
		<a class="close" href="#">&times;</a>
		<div class="content">

	<form action="resched_handle.php" method="POST" class="signup">
	<?php
		$today = date("F j, Y, g:i a"); 
		echo "$today";
		
	?>
	<p>
		<label>Date: </label><br>
	</p>

	<p>
		<label>Time: </label><br>
	</p>

	<p>
		<label>Service: </label>
	</p>

	<p>
		<label><b>New Date</b></label><br>
		<input type="date" name="ndate" required>
	</p>

	<p>
		<label><b>New Time</b></label><br>
		<input type="time" name="ntime" required>
	</p>

	<p class="reg-in">
	<input type="submit" value="Re-schedule Appointment" class="signup-sub" href="setappointment.php">
	</p>
	
	</form>
	</div>
	</div>
</div>

<!--cancel appointment-->
<div id="cancelapp" class="overlay">
	<div class="popup2">
		<h1>Cancel <br>Appointment</h1>
		<hr>
		<a class="close" href="#">&times;</a>
		<div class="content">

	<form action="cancel_handle.php" method="POST" class="signup">
	<?php
		$today = date("F j, Y, g:i a"); 
		echo "$today";
		
	?>

	<p>
		<label>Date:</label><br>
	</p>

	<p>
		<label>Time</label><br>
	</p>

	<p>
		<label>Service: </label>
	</p>

	<p>
		<label>Reason</label><br>
		<input type="text" name="reason" required>
	</p>

	<p class="reg-in">
	<input type="submit" value="Cancel Appointment" class="signup-sub" href="setappointment.php">
	</p>
	
	</form>
	</div>
	</div>
</div>

	<?php
		$reason = $_REQUEST['reason'];

		echo "<p>Your schedule has now been cancelled!</p>";

		echo "<table border='1'>
		<tr>
		<th width='5%'><input type='checkbox'></th><th width='30%'>RESERVATION TIME</th><th width='20%'>DATE</th><th width='20%'>TIME</th><th width='20%'>SERVICE</th><th width='25%'>REMARKS</th></tr>
		<tr><td><input type='checkbox'></td><td></td><td></td><td></td><td></td><td></td></tr>
		<tr><td><input type='checkbox'></td><td></td><td></td><td></td><td></td><td></td></tr>
		<tr><td><input type='checkbox'></td><td></td><td></td><td></td><td></td><td></td></tr>
		</table>";

	  ?>

	  <?php
		include('footer.html');

	?>

</body>
</html>