<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
 ob_start();
 session_start();
 require_once 'Dao.php';
 
 if ( !isset($_SESSION['user'])!="" ) {
  header("Location: index.php");
  exit;
 }
 
 if ( isset($_POST['btn-submit']) ) {
     $con = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b8466cae527cb9","245049d3","heroku_5346190efdce863");
     $res=mysqli_query($con, "SELECT userId, userFirstName, userLastName, userPass FROM users WHERE userEmail='$email'");
	 $userRow=mysqli_fetch_array($res);
	 
	 $userID = $_SESSION['user'];
	 $title = $_POST['title'];
	 $entry = $_POST['noise'];
	 $public = $_POST['publicBool'];
	 
	 $query = "INSERT INTO entries (title,summary,madePublic,userId) VALUES ('$title','$entry','$public','$userID')";
	 $res2 = mysqli_query($con, $query);
	 mysqli_close($con);
 }
 
 
?>

<html>
<head>
<title>My Journal</title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
  


<style type="text/css" media="all">
	@import "css/info.css";
	@import "css/main.css";
	@import "css/widgEditor.css";
</style>

<script type="text/javascript" src="scripts/widgEditor.js"></script>

</head>
<link rel="stylesheet" href="css/styles.css">
<body>

<ul class="navbar">
  <li class="navbar"><img src="logo/logo.png" height="42" width="42"></li>
  <li class="navbar"><a href="index.php">Home</a></li>
  <li class="navbar"><a class="active" href="my-journal.php">My Journal</a></li>
  <li class="navbar"><a href="learn.php">Learn</a></li>
  <li class="navbar"><a href="resources.php">Resources</a></li>
  <li class="navbar"><a href="browse-journals.php">Browse Journals</a></li>
  <?php 
  if( !isset($_SESSION['user']) ) {
	echo '<li class="navbar"><a href="login.php">Login</a></li>';
	} else {
	echo '<li class="navbar"><a href="logout.php?logout">Sign Out</a></li>';
	} 
  ?>
</ul>


<body>
	<div id="content" class="editor ib">
		<h2>
			Create A New Journal Entry
		</h2>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
			<fieldset>
				<label for="noise">
					
				</label>
				<input type="text" name="title" placeholder="Enter Title Here" maxlength="50"/>
				<textarea id="noise" name="noise" class="widgEditor nothing"></textarea>
			</fieldset>
			
			<input type="hidden" name="publicBool" value="0" />
			<input type="checkbox" name="publicBool" value="1"> Make Entry Public<br>
			
			<button type="submit" name="btn-submit">Save and Submit</button>
		</form>
	</div>
	
	<div id="content" class="ib">
		<h2>
			View Journal Entries
		</h2>
		<br />
		
		<?php
		
		$con = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b8466cae527cb9","245049d3","heroku_5346190efdce863");
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$uId = $_SESSION['user'];
		$result = mysqli_query($con,"SELECT * FROM entries WHERE userId='$uId' ");


		while($row = mysqli_fetch_array($result))
		{
			$titlevar = $row['title'];
			echo "<a href='viewentry.php?id=$titlevar'>$titlevar</a><br></br>";
		}

		mysqli_close($con);
		?>
	</div>
	
</body>


<div class="footer">
  <span> 2018 Noah Barnes<span>
</div>
</body>
</html>