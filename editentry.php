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
 
 $hello = "Hellow World";

 $var_title = $_POST['varTitle'];
 //$var_title = $_GET['id'];
 $res = mysqli_query($con,"SELECT summary FROM entries WHERE title='$var_title'");
 $row=mysqli_fetch_array($res);
 $var_summary = $row['summary'];
 
?>

<!DOCTYPE html>
<html>
<head>
<title>My Journal</title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<link rel="stylesheet" href="css/styles.css">
<body>

<style type="text/css" media="all">
	@import "css/info.css";
	@import "css/main.css";
	@import "css/widgEditor.css";
</style>

<script type="text/javascript" src="scripts/widgEditor.js"></script>


<div id="content">
	<?php
		echo "<h2>" . $var_title . "</h2>";
		echo $var_summary;
	?>
	<form action="editentry.php" method="post">
	  <input type="hidden" value="<?php echo $var_title?>" name="varTitle" />
      <input type="submit" value="Edit Entry" />
	</form>
</div>

<div id="content">
		<h2>
			Edit Journal Entry
		</h2>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
			<fieldset>
				<label for="noise">
					
				</label>
				<input type="text" name="title" value="<?php echo $var_title;?>" maxlength="50"/>
				<textarea id="noise" name="noise" value="<?php echo $var_summary;?>" class="widgEditor nothing"></textarea>
			</fieldset>
			<button type="submit" name="btn-submit">Save and Submit</button>
		</form>
</div>


<div class="footer">
  <span> 2018 Noah Barnes<span>
</div>

</body>
</html>
