<html !DOCTYPE HTML>
<body id="reg">
<?php
	$title = "DenTEETH";
	include('header-login.html');
//session_start();
	//connect to database
	$db = mysqli_connect("127.0.0.1", "root", "", "authentication");

		if(isset($_POST['book_btn']))
		{
			$reschedDate = $_POST['reschedDate'];
			$reschedTime = $_POST['reschedTime'];
			$today = date("Y-m-d");
			$ttime = date("H:m a");
			$dttoday = $today . " " . $ttime;

			if ($reschedDate > $today){
			$updatesql = "UPDATE appointments SET schedDate = '$reschedDate', schedTime = '$reschedTime' WHERE ID = ".$_SESSION['id'];
			$result = mysqli_query($db, $updatesql); 

				$_SESSION['message'] = "Your new schedule is dated on" . $_POST['reschedDate'] . "at" . $_POST['reschedTime'];
				
				header("location:l-appointment.php?id=");  //redirect appointment page
			}
			else{	
					$_SESSION['message'] = "Invalid date! Please select again.";
			}
		}

		$sqla = "SELECT * FROM appointments where ID = ".$_GET['id'];
		$myData = mysqli_query($db, $sqla);

?>

	<div id="book-form">

	<div class="book-form">
		<h1>Re-schedule <br>Appointment</h1>

		<form action="reschedule.php?id=<?php echo $_GET['id']; ?>" method='POST' class='bookform'>
		<?php
			$today = date("Y-m-d");
			$ttime = date("H:m a"); 
			echo "<p class='today'>$today $ttime</p>";
			if ($record = mysqli_fetch_array($myData)){
			$_SESSION['id'] = $_GET['id'];
		?>

	<p>
		<label>Date: </label>
		<?php
			echo $record['schedDate'];
		?>
	</p>

	<p>
		<label>Time: </label>
		<?php
			echo $record['schedTime'];
		?>
	</p>

	<p>
		<label>Service: </label>
		<?php
			echo $record['service'];
		}else{
			exit('invalid request.');
		}
		?>
	</p>

	<p>
		<label><b>New Date</b></label><br>
		<input type="date" name="reschedDate" required>
	</p>

	<p>
		<label><b>New Time</b></label><br>
		<select name="reschedTime">
				<option>Select Time</option>
				<option>8:00 AM</option>
				<option>9:00 AM</option>
				<option>10:00 AM</option>
				<option>11:00 AM</option>
				<option>1:00 PM</option>
				<option>2:00 PM</option>
				<option>3:00 PM</option>
				<option>4:00 PM</option>
				<option>5:00 PM</option>
			</select>
	</p>

	<p class="reg-in">
	<input type="submit" value="Re-shedule Appointment" class="book-sub" name="book_btn">
	</p>
	
	</form>

	<?php
	    if(isset($_SESSION['message']))
	    {
	         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
	         unset($_SESSION['message']);
    }
?>

	<a href="l-appointment.php" class="back_btn"> << Back</a>

	<div class="clear"></div>	

	</div>
<div class="clear"></div>
	</div>

	<?php
		include('footer.html');

	?>

</body>
</html>