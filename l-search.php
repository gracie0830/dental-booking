<html !DOCTYPE HTML>
<body>

    <?php
    $title = "DenTEETH";
    include('header-login.html');
	//connect to database
	$db = mysqli_connect("127.0.0.1", "root", "", "authentication");

	if(isset($_GET['q']) && $_GET['q'] !== '')
	{
		$searchq = $_GET['q'];
		$sql = "SELECT * FROM search WHERE keyword LIKE '%$searchq%' OR title LIKE '%$searchq%'";
		$output='';
		$results = mysqli_query($db, $sql);
	
		if (count($results) == 0){
			$output .= 'No search results for <b>"' . $searchq . '"</b>';
		}
		else{
			while ($row = mysqli_fetch_array($results)){
				$id = $row['search_id'];
				$title = $row['title'];
				$desc = $row['description'];
				$link = $row['link'];
				$img = '<img src="images/thumbnail/'.$row['search_id'].'.jpg" class="thumbnail">';

				$output .= '<div class="search_thumb">
							<p class="search_cap"><a href="' . $link . '">' . $img . '<h3>' . $title . '</h3></a>' . $desc .
							'<div class="clear"></div></p></div>';
			}
		}
	}
	else{
		header("location: ./");
	}
	print($output);
?>

<div class="row">

   </div>
<?php
        include('footer.html');

    ?>

</body>
</html>