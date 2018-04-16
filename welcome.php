<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php

if (isset($_POST['Submit'])) {  

$Title = $_Post['name'];
$Entry = $_Post['email'];
echo "name is $Title";
echo "email is $Entry";

}

else {
	echo "Your form is not submitted yet please fill the form and visit again";
}
?>


</body>
</html>