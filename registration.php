<?php

	//connect to database
	 $db = mysqli_connect("127.0.0.1", "root", "", "authentication");
		if(isset($_POST['register_btn']))
		{
			function check_identity($identity,$type)
			{//true means existed
				$query="SELECT COUNT($type) as count__ FROM users WHERE $type='$identity'";
				$count=0;
	 			$db2 = mysqli_connect("127.0.0.1", "root", "", "authentication");
				$myData = mysqli_query($db2, $query);
					if ($row = mysqli_fetch_array($myData)){
					$count=$row['count__'];
				}
				return (bool) (!($count == 0));
			}
			$givenName = ($_POST['gname']);
			$lastName = $_POST['lname'];
			$gender = $_POST['gender'];
			$birthDate = $_POST['birthdate'];
			$contactNumber = $_POST['contactNum'];
			$address = $_POST['address'];
			$username = $_POST['username'];
			$emailAddress = $_POST['email'];
			$password = $_POST['password'];
			$confirmPassword = $_POST['cpassword'];
		
			$_SESSION['message'] = '';
			$chk_username = check_identity($username,'username') ;
			$chk_email = check_identity($emailAddress,'emailaddress');
			if($chk_username){
				$_SESSION['message'] .= ' Username already exist!';
			}
			if($chk_email){
				$_SESSION['message'] .= ' Email already exist!';
			}

			if(!$chk_email && !$chk_username){
				if ($password == $confirmPassword){
					//create user
					$password = md5($password); //hash password before storing for security purposes
					$sql = "INSERT INTO users(givenName, lastName, gender, birthDate, contactNumber, address,
						username, emailAddress, password) VALUES ('$givenName', '$lastName', '$gender','$birthDate',
						'$contactNumber', '$address', '$username', '$emailAddress', '$password')";
					$result = mysqli_query($db, $sql); 
					$_SESSION['message'] = "You are now registered!";
					$_SESSION['username'] = $username;
					header("location:login.php");  //redirect home page
				}
				else{
					$_SESSION['message'] = "The two passwords do not match";		
				}
			}
			else{
				//email exist
				//echo  $_SESSION['message'];
				//$_SESSION['message'] .= 'Username and Email already exist!';
			}
}
	?>

<html !DOCTYPE HTML>
<?php
		$title = "DenTEETH";
		include('header.html');
?>


<body id="reg">
	<div id="reg-form">

	<div class="signup-form">
		<h1 class="form-h1">Sign Up </h1>
		<form action="registration.php" method="POST" class="signup">
		
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

	<p class="pass">
		<label>Username</label><br>
		<input type="text" name="username" class="in" required>
	</p>

	<p>
		<label>Email Address</label><br>
		<input type="email" name="email" class="in" required>
	</p>

	<p class="pass">
		<label>Password</label><br>
		<input type="password" name="password" class="in" required>
	</p>

	<p>
		<label><b>Confirm Password</b></label><br>
		<input type="password" name="cpassword" class="in" required>
	</p>

	<p>
	<input type="submit" name="register_btn" value="Sign Up" class="signup-sub">
	</p>

	<hr>
	<p class="reg-label">
		<label>Already have an account?</label>
		<a class="button-log" href="login.php">Log in</a>
	</p>
		</form>

	<?php
	    if(isset($_SESSION['message']))
	    {
	         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
	         unset($_SESSION['message']);
    }
?>

	<div class="clear"></div>	

	</div>
<div class="clear"></div>
	</div>

	<?php
		include('footer.html');

	?>

</body>
</html>