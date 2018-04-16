<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php

var_dump($_POST["name"]);

$Title = $_Post['name'];
$Entry = $_Post['email'];
echo "name is $Title";
echo "email is $Entry";
?>


</body>
</html>