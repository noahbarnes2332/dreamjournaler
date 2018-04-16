<?php
 ob_start();
 session_start();
 require_once 'Dao.php';
 
 if ( !isset($_SESSION['user'])!="" ) {
  header("Location: index.php");
  exit;
 }
 
  if ( isset($_POST['btn-submit']) ) {
	 $title = $_POST['title'];
	 $old_title = $_POST['oldTitle'];
	 $entry = $_POST['noise'];
	 
	 
	 //$sql = "INSERT INTO entries (title,summary) VALUES ('$title','$entry')";
	 $query = "UPDATE entries SET title = $title WHERE title = $old_title";
     $con = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b8466cae527cb9","245049d3","heroku_5346190efdce863");
     $res = mysqli_query($con, $query);
	 mysqli_close($con);
	 
	 header("Location: my-journal.php");
 }
 
 $con = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b8466cae527cb9","245049d3","heroku_5346190efdce863");
 if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 

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
		<h2>
			Edit Journal Entry
		</h2>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
			<fieldset>
				<label for="noise">
					
				</label>
				<input type="text" name="title" value="<?php echo $var_title;?>" maxlength="50"/>
				<input type="hidden" value="<?php echo $var_title?>" name="oldTitle" />
				<textarea id="noise" name="noise" class="widgEditor nothing"><?php echo$var_summary;?></textarea>
			</fieldset>
			<button type="submit" name="btn-submit">Save and Submit</button>
		</form>
</div>


<div class="footer">
  <span> 2018 Noah Barnes<span>
</div>

</body>
</html>
