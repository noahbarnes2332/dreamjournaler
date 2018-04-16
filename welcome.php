<html>
<body>



<?php

if (isset($_POST['submit'])) {  

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