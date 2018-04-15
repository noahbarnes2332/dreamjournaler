<?php
 ob_start();
 session_start();
 require_once 'Dao.php';
 
 if ( !isset($_SESSION['user'])!="" ) {
  header("Location: index.php");
  exit;
 }
 
 $error = false;
 
 
 if( isset($_POST['btn-enterJ']) ) { 
    if( !$error ) {
   
      $con = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b8466cae527cb9","245049d3","heroku_5346190efdce863");
      if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	  }
  
	}
 }
 
 
?>

<html>
<head>
<title>Dream Journaler</title>
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

	<div id="content">
		<h2>
			Create A New Journal Entry
		</h2>
		<form action="submit.php" onsubmit="alert('Your submitted HTML was:\n\n' + document.getElementById('entryTitle').value + document.getElementById('noise').value); return false;">
			<fieldset>
				<label for="noise">
					
				</label>
				<input id="entryTitle" type="text" placeholder="Enter Title Here" maxlength="50"/>
				<textarea id="noise" name="noise" class="widgEditor nothing"></textarea>
			</fieldset>
			<fieldset class="submit">
				<!--<input type="submit" value="Save and Submit" />-->
				<button type="submit" name="btn-enterJ">Save and Submit</button>
			</fieldset>
		</form>
	</div>
</body>


<div class="footer">
  <span> 2018 Noah Barnes<span>
</div>
</body>
</html>