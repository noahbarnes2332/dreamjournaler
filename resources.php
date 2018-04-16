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
  <li class="navbar"><a class="active" href="resources.php">Resources</a></li>
  <li class="navbar"><a href="browse-journals.php">Browse Journals</a></li>
  <?php 
  if( !isset($_SESSION['user']) ) {
	echo '<li class="navbar"><a href="login.php">Login</a></li>';
	} else {
	echo '<li class="navbar"><a href="logout.php?logout">Sign Out</a></li>';
	} 
  ?>
</ul>

<div class="background">
	<div id="content">
		<h1>Resources</h1>
        <h3>Here Are Some Great Resources For More Information!</h3>  
		<a class="darkblue" href="https://www.dreamviews.com/induction-techniques/113253-all-day-awareness-dild-tutorial-kingyoshi.html">dreamviews.com</a></li>
        <p>
            Great website for checking out forums and other people's experiences.  This specific link is a great source of information
			about the DILD lucid dream technique.
        </p>  
		
		<a class="darkblue" href="https://www.psychologytoday.com/us/blog/the-superhuman-mind/201212/lucid-dreaming-and-self-realization">psychologytoday.com</a></li>
        <p>
            Overall some good information about lucid dreams and benifits.
        </p>
		
		<a class="darkblue" href="https://vanwinkles.com/how-common-is-lucid-dreaming">vanwinkles.com</a></li>
        <p>
            Some interesting statistics about lucid dreaming.
        </p>
		
		<a class="darkblue" href="">dreamviews.com</a></li>
        <p>
            
        </p>

	</div>
	
</div>

<div class="footer">
  <span> 2018 Noah Barnes<span>
</div>
</body>
</html>