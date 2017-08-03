<?php
	
        $title = "DenTEETH";
        include('header-login.html');
	$db = mysqli_connect("127.0.0.1", "root", "", "authentication");

	if (!$db){
		die("Connection failed: " . mysqli_connect_error());
        }
		if(isset($_POST['book_btn']))
		{
			$bookdate = $_POST['bookdate'];
			$booktime = $_POST['appTime'];
			$services = $_POST['services'];
			$userID = $_SESSION['user_id'];
			$today = date("Y-m-d");
			$ttime = date("H:m a");
			$dttoday = $today . " " . $ttime;
			$username = $_SESSION['username'];
			//$_SESSION['login_btn'] = true;
			if ($today < $bookdate)
			{
				$sql = "INSERT INTO `appointments`(userID, reservationDateTime, schedDate, schedTime, service, status) VALUES
				($userID,'$dttoday', '$bookdate', '$booktime', '$services', '')";
				$result = mysqli_query($db, $sql); 
				header("location:l-appointment.php");  //redirect appointment page
				//$_SESSION['username'] = $username;
			}
				else
				{	
					$_SESSION['message'] = "Invalid date! Please select a valid one.";
				}
		}
?>

<html !DOCTYPE HTML>

<body id="reg">
	<div id="abook-form">

	<div class="abook-form">
		<h1>Book Now</h1>
		<form action="l-book.php" method="POST" class="bookform">
		<?php
			$today = date("Y-m-d");
			$ttime = date("H:m a");
			echo "<p class='today'>$today $ttime</p>";
		?>

	<p class="pass">
		<label>Given Name</label><br>
		<input type="text" name="gname" class="in" required>
	</p>

	<p>
		<label>Last Name</label><br>
		<input type="text" name="lname" class="in" required>
	</p>

	<p class="b-right">
	<input type="radio" name="gender" value="F"/>Female
	<input type="radio" name="gender" value="M"/>Male
	</p>

	<p>
		<label>Birthdate</label><br>
		<input type="date" name="birthdate" class="in" required>
	</p>

	<p class="pass">
		<label>Contact Number</label><br>
		<input type="tel" name="contactNum" class="in" required>
	</p>

	<p>
		<label>Address</label><br>
		<input type="text" name="address" class="in" required>
	</p>

	<p class="b-right">
		<label>Schedule Date</label><br>
		<input type="date" name="bookdate" required>
	</p>

<?php
	$time=array('8:00 AM', '9:00 AM', '10:00 AM',
	'11:00 AM', '1:00 PM', '2:00 PM', '3:00 PM',
	'4:00 PM', '5:00 PM');
	//$time_options=array();
	
	//get/select all time reserved -array
	//if $valuer

	//loop -$time
		//if in db then skip

	//else add -
?>
	<p>
		<label>Time</label><br>
			<select name="appTime">
				<option>Select Time</option>

<?php
	foreach ($time as  $value) {
		echo "<option>$value</option>";
	}
?>

			</select>
	</p>
<?php
	unset($time);

	$services_option = array('Tooth Extraction', 'Tooth Whitening', 'Implants', 'Veneers',
		'Bridges','Crowns', 'Root Canal', 'Dentures', 'Braces');
?>
	<p>
		<label>Service</label>
		<select name="services">
			<option>Select Services</option>
			<?php 
				foreach ($services_option as $value){
					echo "<option>$value</option>";
				}
			?>
		</select>
	</p>
	<?php
	unset($services_option);
	?>

	<p class="reg-in">
	<input type="submit" value="Book Appointment" class="abook-sub" name="book_btn">
	</p>

		</form>
		
<?php
	    if(isset($_SESSION['message']))
	    {
	         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
	         unset($_SESSION['message']);
    }
?>

	<a href="admin-appointment.php" class="back_btn"> << Back</a>

	<div class="clear"></div>	

	</div>
<div class="clear"></div>
	</div>

	<?php
		include('footer.html');

	?>

</body>
</html>