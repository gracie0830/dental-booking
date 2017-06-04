<?php
session_start();
//connect to database
	$db = mysqli_connect("127.0.0.1", "root", "", "authentication");
	if(isset($_POST['adminlog_btn']))
	{
	    $adminUsername = ($_POST['adminUsername']);
	    $adminPass = ($_POST['adminPass']);

	    $adminPass = md5($adminPass); //Remember we hashed password before storing last time
	        $sql = "SELECT * FROM admin WHERE adminUsername ='$adminUsername' AND adminPass ='$adminPass'";
    		$result = mysqli_query($db,$sql);
	        if($row = mysqli_fetch_array($result)){
	        	$_SESSION['username'] = $row['adminUsername'];
		        $_SESSION['message'] = "You are now Loggged In";
		        header("location:admin-appointment.php");
    		}
      else{
          $_SESSION['message'] = "Username and Password combination incorrect";
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

	<div class="adminlogin-form">

		<h1 class="form-h1">Admin Log In</h1>
		<form action="admin-login.php" method="POST" class="login">
		
		<p>
			<label>Username</label><br>
			<input type="text" name="adminUsername" class="in" required >
		</p>

		<p>
			<label>Password</label><br>
			<input type="password" name="adminPass" class="in" required >
		</p>

		<p class="reg-in">
		<input type="submit" value="Login" class="login-sub" name="adminlog_btn">
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