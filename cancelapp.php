<html !DOCTYPE HTML>
<body id="reg">

<?php
	
	$title = "DenTEETH";
	include('header-login.html');
	//connect to database
	$db = mysqli_connect("127.0.0.1", "root", "", "authentication");


if (isset($_GET['ID']) && is_numeric($_GET['ID']))
{
	// get the 'id' variable from the URL
	$id = $_GET['ID'];
	echo "naay ID";
}


		if(isset($_POST['cancel_btn']))
		{
			$updatesql = "UPDATE appointments SET status = 'cancelled' WHERE ID = $_SESSION[id]";
			$result = mysqli_query($db, $updatesql); 
				//$_SESSION['message'] = "Your new schedule is dated on" . $_POST['reschedDate'] . "at" . $_POST['reschedTime'];
				

echo "naay gwapo";

				header("location:cancel-appointment.php");  //redirect appointment page
		}

		$sqla = "SELECT * FROM appointments where ID = $_GET[id]";
		$myData = mysqli_query($db, $sqla);
?>


	<div id="book-form">

	<div class="book-form">
		<h1>Cancel <br>Appointment</h1>
		<form action="cancelapp.php" method="POST" class="bookform">
		<?php
			$today = date("Y-m-d");
			$ttime = date("H:m a"); 
			echo "<p class='today'>$today $ttime</p>";

		while ($record = mysqli_fetch_array($myData)){
			$_SESSION['id'] =$_GET['id'];
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
		}
		?>
	</p>

	<p class="reg-in">
	<input type="submit" value="Cancel Appointment" class="book-sub" name="cancel_btn">
	</p>

	</form>

	<?php
	    if(isset($_SESSION['message']))
	    {
	         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
	         unset($_SESSION['message']);
    }
?>

		<a href="l-appointment.php" class="back_btn">Back >></a>

	<div class="clear"></div>	

	</div>
<div class="clear"></div>
	</div>

	<?php
		include('footer.html');

	?>

</body>
</html>