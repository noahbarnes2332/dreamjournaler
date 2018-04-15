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

<script type="text/javascript" src="scripts/widgEditor.js"></script>


<body>

	<div id="content">
		<h2>
			widgEditor
		</h2>
		<form action="submit.php" onsubmit="alert('Your submitted HTML was:\n\n' + document.getElementById('noise').value); return false;">
			<fieldset>
				<label for="noise">
					Make some noise:
				</label>
				<textarea id="noise" name="noise" class="widgEditor nothing">&lt;p&gt;widgEditor &lt;strong&gt;automatically&lt;/strong&gt; integrates the content that was in the textarea!&lt;/p&gt;</textarea>
			</fieldset>
			<fieldset class="submit">
				<input type="submit" value="Check the submitted code" />
			</fieldset>
		</form>
	</div>
<!-- END content -->
</body>


<div class="footer">
  <span> 2018 Noah Barnes<span>
</div>
</body>
</html>