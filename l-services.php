<?php
//session_start();
?>
<html !DOCTYPE HTML>
<body>

	<?php
		$title = "DenTEETH";
		include('header-login.html');

	?>

	<div class="s-caption"><!--start s-caption here-->
		<p>With world-class treatment from the dental team to its facilities and equipment,
			the DenTeeth provides various services from general dentistry,
			dental implantology to orthodontics –
			dedicated to giving its patients a healthy teeth and beautiful smile
			to inspire their everyday. Here are some of the clinic’s services:
		</p>
	</div><!--end s-caption here-->

	<div class="s-offered"><!--start s-offered here-->
		<p>
			<a href="extraction.php"><img src="images\extraction1.jpg"><br>
			Tooth Extraction</a>
		</p>

		<p>
			<a href="whitening.php"><img src="images\teeth-whitening.jpg"><br>
			Tooth Whitening</a>
		</p>

		<p class="l-img">
			<a href="implants.php"><img src="images\implant.jpg"><br>
			Implants</a>
		</p>

		<p>
			<a href="veneers.php"><img src="images\veneers.jpg"><br>
			Veneers</a>
		</p>

		<p>
			<a href="bridge.php"><img src="images\bridge2.jpg"><br>
			Bridges</a>
		</p>

		<p class="l-img">
			<a href="crown.php"><img src ="images\crown.jpg"><br>
			Crowns</a>
		</p>

		<p>
			<a href="rootcanal.php"><img src="images\rootcanalsteps.png"><br>
			Root Canal</a>
		</p>

		<p>
			<a href="dentures.php"><img src="images\dentures.jpg"><br>
			Dentures</a>
		</p>

		<p class="l-img">
			<a href="braces.php"><img src="images\braces.jpg"><br>
			Braces</a>
		</p>
		<div class="clear"></div>
	</div><!--end s-offered here-->

<?php
		include('footer.html');

	?>
</body>
</html>