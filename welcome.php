<html>
<body>



<?php

if (isset($_POST['submit'])) {  

$Title = $_Post['name'];
$Entry = $_Post['email'];
echo $Title;
echo $Entry;

$str = "Hello world!";
echo $str;

}

else {
	echo "Your form is not submitted yet please fill the form and visit again";
}
?>


</body>
</html>