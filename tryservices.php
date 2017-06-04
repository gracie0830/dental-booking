<?php
  $db = mysqli_connect("127.0.0.1", "root", "", "authentication");

/*
 Displays the list of artist links on the left-side of page
*/
function outputServices() {
   try {
         $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "SELECT * FROM search order by Title limit 0,15";
         $result = mysqli_query($db, $updatesql); 

         while ($row = $result->fetch()) {
            echo '<a href="lab11-exercise10.php?id=' . $row['ArtistID'] . '" class="list-group-item';
            if (isset($_GET['id']) && $_GET['id'] == $row['ArtistID']) echo ' active';
            echo '">';
            echo $row['LastName'] . '</a>';
         }
         $pdo = null;
   }
   catch (PDOException $e) {
      die( $e->getMessage() );
   }
}

/*
 Displays the list of paintings for the artist id specified in the id query string
*/
function outputPaintings() {
   try {
      if (isset($_GET['id']) && $_GET['id'] > 0) {   
         $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
         $sql = 'select * from ArtWorks where ArtistId=:id' ;
         $id = $_GET['id'];
         $statement = $pdo->prepare($sql);
         $statement->bindValue(':id',$id);
         $statement->execute();
         while ($row = $statement->fetch()) {
            outputSinglePainting($row);         
         }
         $pdo = null;
      }
   }
   catch (PDOException $e) {
      die( $e->getMessage() );
   }
}

/*
 Displays a single painting
*/
function outputSinglePainting($row) {
   echo '<div class="media">';
   echo '<a class="pull-left" href="#">';
   echo '<img class="media-object" src="images/art/works/square-medium/' . $row['ImageFileName'] .'.jpg">';
   echo '</a>';
   echo '<div class="media-body">';
   echo '<h4 class="media-heading">';
   echo htmlentities($row['Title'], ENT_IGNORE | ENT_HTML5, "ISO-8859-1"); 
   echo '</h4>';
   echo $row['Description']; 
   echo '</div>';
   echo '</div>';
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 11</title>

    <!-- Bootstrap core CSS  -->    
    <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet"> 

  </head>
<body>

<div class="well"><h1>User Input (pdo)</h1></div>

<div class="container">
   <div class="row">
   
      <div class="col-md-3">
         <div class="list-group">
            <?php outputArtists(); ?>      
         </div>
      </div>
      <div class="col-md-9">
         <?php outputPaintings(); ?>  
      </div>
   
   </div>
</div>

</body>
</html>