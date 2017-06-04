<?php
	//connect to database
	$db = mysqli_connect("127.0.0.1", "root", "", "authentication");
	$sql = "SELECT * FROM appointments";
	$records = mysqli_query($db,$sql);
?>

<html !DOCTYPE HTML>
<body>
<?php
		$title = "DenTEETH";
		include('header.html');
	?>

<div class="app"><!--start app here-->

	<div class="button-book">
		<button class="book-but"><a href="book.php" class="app-but">Book Appointment</a></button>
	</div>	
</div><!--end app here-->

	<?php
		include('footer.html');

	?>

</body>
</html>