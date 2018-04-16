<?php
	$var_title = $_SESSION['titlevar'];
	$var_summary = $_SESSION['summaryvar'];
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
	?>
</div>


<div class="footer">
  <span> 2018 Noah Barnes<span>
</div>

</body>
</html>
