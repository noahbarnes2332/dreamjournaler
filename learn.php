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
<link rel="stylesheet" href="styles.css">
<body>

<ul>
  <li><img src="logo/logo.png" height="42" width="42"></li>
  <li><a href="index.php">Home</a></li>
  <li><a href="my-journal.php">My Journal</a></li>
  <li><a class="active" href="learn.php">Learn</a></li>
  <li><a href="resources.php">Resources</a></li>
  <li><a href="browse-journals.php">Browse Journals</a></li>
  <li><a href="help.php">Help</a></li>
  <?php 
  if( !isset($_SESSION['user']) ) {
	echo '<li><a href="login.php">Login</a></li>';
	} else {
	echo '<li><a href="logout.php?logout">Sign Out</a></li>';
	} 
  ?>
</ul>

<div class="background">
	<div class="transbox1">
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	</div>
	
	<div class="transbox1">
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	Text here later. Text here later. Text here later. Text here later. Text here later. 
	</div>
	
</div>


<div class="footer">
  <span> 2018 Noah Barnes<span>
</div>
</body>
</html>