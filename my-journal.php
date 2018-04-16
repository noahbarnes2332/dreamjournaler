<?php
 ob_start();
 session_start();
 require_once 'Dao.php';
 
 if ( !isset($_SESSION['user'])!="" ) {
  header("Location: index.php");
  exit;
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


<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" value="Submit">
</form>


	<div id="content">
		<h2>
			Create A New Journal Entry
		</h2>
		<form method="post" action="submit.php">
			<fieldset>
				<label for="noise">
					
				</label>
				<input type="text" name="title" placeholder="Enter Title Here" maxlength="50"/>
				<textarea id="noise" name="noise" class="widgEditor nothing"></textarea>
			</fieldset>
			<input type="submit"/>
		</form>
	</div>
</body>


<div class="footer">
  <span> 2018 Noah Barnes<span>
</div>
</body>
</html>