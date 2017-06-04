<html !DOCTYPE HTML>
<body>
<?php
		$title = "DenTEETH";
		include('header.html');
	?>

<form action="setapp_handle.php" method="POST" class="signup">
	<p>
		<label>Date</label><br>
		<input type="date" name="date" required>
	</p>

	<p>
		<label>Time</label><br>
		<input type="time" name="time" required>
	</p>

	<p>
		<label>Given Name</label><br>
		<input type="text" name="gname" required>
	</p>

	<p>
		<label>Last Name</label><br>
		<input type="text" name="lname" required>
	</p>

	<p>
		<label>Birthdate</label><br>
		<input type="date" name="date" required>
	</p>

	<p>
		<label>Gender</label>
		<input type="radio" name="gender" value="F"/>Female
		<input type="radio" name="gender" value="M"/>Male
	</p>

	<p>
		<label>Service</label>
		<select>
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

	<?php
		include('footer.html');

	?>

</body>
</html>