<html !DOCTYPE HTML>
<body>
<?php
	
		$title = "DenTEETH";
		include('header-login.html');

	//connect to database
	$db = mysqli_connect("127.0.0.1", "root", "", "authentication");
	$sql = "SELECT * FROM appointments where userID =".$_SESSION['user_id']. " ORDER BY schedDate";
	$records = mysqli_query($db,$sql);
?>

<div class="app"><!--start app here-->
	<p>
		Appointments:
	</p>

	<div class="buttons-app">
		<button class="app-but"><a href="book.php" class="app-but">Book Appointment</a></button>
	</div>

	<table width="1024" border="1" cellpadding="1" cellspacing="1">
		<tr>
		<th>Reservation Date and Time</th>
		<th>Date</th>
		<th>Time</th>
		<th>Service</th>
		<th>Status</th>
		</tr>

<?php
	
	while($client=mysqli_fetch_assoc($records)){
		echo "<tr>";
		echo "<td>" .$client['reservationDateTime']."</td>";
		echo "<td>" .$client['schedDate']."</td>";
		echo "<td>" .$client['schedTime']."</td>";
		echo "<td>" .$client['service']."</td>";
		echo "<td>" .$client['status']."</td>";
		echo "<td> 	<div class=buttonsapp>
		<button class='buttonsapp'><a href='reschedule.php?id=$client[ID]' class='buttonsapp'>Re-schedule Appointment</a></button> |
		<button class='buttonsapp'><a href='cancelapp.php?id=$client[ID]' class='buttonsapp'>Cancel Appointment</a></button>
		</div> </td>";
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