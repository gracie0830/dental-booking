<?php
session_start();
//connect to database
	$db = mysqli_connect("127.0.0.1", "root", "", "authentication");
	if(isset($_POST['login_btn']))
	{
	    $username = ($_POST['username']);
	    $password = ($_POST['password']);
	    $password = md5($password); //Remember we hashed password before storing last time
	        $sql = "SELECT * FROM users WHERE username ='$username' AND password ='$password'";
	   
    		$result = mysqli_query($db,$sql);
	        if($row = mysqli_fetch_array($result)){
		        $_SESSION['username'] = $row['username'];
		        //$_SESSION['fullname'] = $row['username'].', '.$row['username'].' '.$row['username'];
		        $_SESSION['login'] = true;
		        $_SESSION['user_id']=$row['userID'];
		        header("location:home.php?user=$username");
    		}
    	
      else{
          $_SESSION['message']="Username and Password combination is incorrect";
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

	<div class="login-form">
	<h1 class="form-h1">Log In</h1>
		<form action="login.php" method="POST" class="login">
		<p>
			<label>Username</label><br>
			<input type="text" name="username" class="in" required >
		</p>

		<p>
			<label>Password</label><br>
			<input type="password" name="password" class="in" required >
		</p>

		<p class="reg-in">
		<input type="submit" value="Login" class="login-sub" name="login_btn">
		</p>

	<hr>
	<p class="reg-label">
		<label>Create an account</label>
		<a class="button-log" href="registration.php">Sign Up</a>
	</p>
		</form>
	
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>

	</div>
<div class="clear"></div>
	</div>

	<?php
		include('footer.html');

	?>

</body>
</html>