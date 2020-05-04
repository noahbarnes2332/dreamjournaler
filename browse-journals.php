<?php
 ob_start();
 session_start();
 require_once 'Dao.php';
?>

<html>
<head>
  <title>Dream Journaler</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<link rel="stylesheet" href="css/styles.css">
<body>

<ul class="navbar">
  <li class="navbar"><img src="logo/logo.png" height="42" width="42"></li>
  <li class="navbar"><a href="index.php">Home</a></li>
  <li class="navbar"><a href="my-journal.php">My Journal</a></li>
  <li class="navbar"><a href="learn.php">Learn</a></li>
  <li class="navbar"><a href="resources.php">Resources</a></li>
  <li class="navbar"><a class="active" href="browse-journals.php">Browse Journals</a></li>
  <?php 
  if( !isset($_SESSION['user']) ) {
	echo '<li class="navbar"><a href="login.php">Login</a></li>';
	} else {
	echo '<li class="navbar"><a href="logout.php?logout">Sign Out</a></li>';
	} 
  ?>
</ul>


		
		<?php
		
		$con = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b8466cae527cb9","245049d3","heroku_5346190efdce863");
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$uId = $_SESSION['user'];
		$result = mysqli_query($con,"DELETE * FROM entries WHERE madePublic='1' ");


		while($row = mysqli_fetch_array($result))
		{
			echo '<div id="content">';
			
			$var_title = $row['title'];
			$var_summary = $row['summary'];
			
			echo "<h2>" . $var_title . "</h2>";
			echo $var_summary;
			
			echo '</div>';
		}

		mysqli_close($con);
		?>



<div class="footer">
  <span> 2018 Noah Barnes<span>
</div>
</body>
</html>
