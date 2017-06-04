<?php
	//connect to database
	$db = mysqli_connect("127.0.0.1", "root", "", "authentication");

	$sql = "SELECT * FROM appointments";

	$records = mysqli_query($db,$sql);

?>


<html>
<title></title>
<head></head>
<body>

<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th><input type='checkbox'></th>
<th>Fullname</th>
<th>Reservation Time</th>
<th>Date</th>
<th>Time</th>
<th>Service</th>
<th>Re-schedule Date</th>
<th>Re-schedule Time</th>
<th>Remarks</th>

</tr>

<?php
	$today = date("F j, Y, g:i a"); 
		echo "$today";
	while($client=mysqli_fetch_assoc($records)){

		echo "<tr>";
		echo "<td><input type='checkbox'></td>";
		echo "<td>" .$client['fullname']."</td>";
		echo "<td>" .$client['reservationTime']."</td>";
		echo "<td>" .$client['schedDate']."</td>";
		echo "<td>" .$client['schedTime']."</td>";
		echo "<td>" .$client['service']."</td>";
		echo "<td>" .$client['reschedDate']."</td>";
		echo "<td>" .$client['reschedTime']."</td>";
		echo "<td>" .$client['remarks']."</td>";
		echo "</tr>";

	}
?>
</html>