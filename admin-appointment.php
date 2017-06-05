<?php

	//connect to database
	$db = mysqli_connect("127.0.0.1", "root", "", "authentication");

	$sql = "SELECT a.reservationDateTime, a.schedDate, a.schedTime, a.service, b.givenName, b.lastName,
	b.birthDate, b.gender, b.contactNumber, b.address, a.status FROM `appointments` as a left join users as b
	on a.userID=b.userID ORDER BY schedDate";
	$_SESSION['login'] = true;

	$records = mysqli_query($db,$sql);

?>

<html !DOCTYPE HTML>
<body>
<?php
		$title = "DenTEETH";
		include('header-login.html');
	?>

<div class="app"><!--start app here-->
	<p>
		Appointments:
	</p>
	
	<!--<div class="buttons-app">
		<button class="app-but"><a href="a-book.php" class="app-but">Book Appointment</a></button>
	</div>-->

	<table width="800" border="1" cellpadding="1" cellspacing="1">
		<tr>
		<th>Reservation Time</th>
		<th>Date</th>
		<th>Time</th>
		<th>Service</th>
		<th>Name</th>
		<th>Birthdate</th>
		<th>Gender</th>
		<th>Contact Number</th>
		<th>Address</th>
		<th>Status</th>
		</tr>

<?php
	while($client=mysqli_fetch_assoc($records)){

		echo "<tr>";
		echo "<td>" .$client['reservationDateTime']."</td>";
		echo "<td>" .$client['schedDate']."</td>";
		echo "<td>" .$client['schedTime']."</td>";
		echo "<td>" .$client['service']."</td>";
		echo "<td>" .$client['givenName']. " " .$client['lastName']. "</td>";
		echo "<td>" .$client['birthDate']."</td>";
		echo "<td>" .$client['gender']."</td>";
		echo "<td>" .$client['contactNumber']."</td>";
		echo "<td>" .$client['address']."</td>";
		echo "<td>" .$client['status']."</td>";
		//echo "<td>Confirm<input type='checkbox'>&nbsp Pending<input type='checkbox'></td>";
		echo "</tr>";

	}
?>
	</table>			
</div><!--end app here-->

	<?php
		include('footer.html');

	?>

</body>
</html>