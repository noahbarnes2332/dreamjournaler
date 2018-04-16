<?php
	$con = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b8466cae527cb9","245049d3","heroku_5346190efdce863");
	if(!$con){
		echo 'Not Connected To Server';
	}
	
	echo $_POST['title'];
	echo $_POST['noise'];
	
	$values = $_POST;
	
	$Title = $_Post[0];
	$Entry = $_Post[1];
	
	echo "foo is $Title";
	
	$sql = "INSERT INTO entries (title,summary) VALUES ('$Title','$Entry')";
	
	if(!mysqli_query($con,$sql)){
		echo 'not inserted';
	}
	else{
		echo 'inserted';
	}
	
	header("refresh:2; url=index.php");
	
?>
