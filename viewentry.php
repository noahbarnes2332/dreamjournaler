<?php
 ob_start();
 session_start();
 require_once 'Dao.php';
 
 if ( !isset($_SESSION['user'])!="" ) {
  header("Location: index.php");
  exit;
 }
 
 $con = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b8466cae527cb9","245049d3","heroku_5346190efdce863");
 if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

 $var_title = $_GET['id'];
 $var_summary = mysqli_query($con,"SELECT summary FROM entries WHERE title=$var_title");
 
 
?>

<!DOCTYPE html>
<html>
<head>
<title>Sign In</title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<link rel="stylesheet" href="css/styles.css">
<body>

<div id="content">
	<?php
		echo $var_title;
		echo "<h2>" . $var_title . "</h2>";
		echo $var_summary;
	?>
</div>


<div class="footer">
  <span> 2018 Noah Barnes<span>
</div>

</body>
</html>
