<?php
	$con = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b8466cae527cb9","245049d3","heroku_5346190efdce863");
	if(!$con){
		echo 'Not Connected To Server';
	}
	
	echo $_POST['title'];
	echo $_POST['noise'];
	
	
	$title = $_Post['title'];
	$entry = $_Post['noise'];
	
	echo $title;
	
	$sql = "INSERT INTO 'entries' (title,summary) VALUES ('$title','$entry')";
	
	if(!mysqli_query($con,$sql)){
		echo 'not inserted';
	}
	else{
		echo 'inserted';
	}
	
	//header("refresh:2; url=index.php");
	
?>
