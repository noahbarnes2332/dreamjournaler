<html>
<body>



<?php

if (isset($_POST['submit'])) {  

$my_post = $_POST;

$Title = $_Post['name'];
$Entry = $_Post['email'];
echo $Title;
echo $Entry;

$str = "Hello world!";
echo $str;

$testTitle = my_post['name'];
echo $testTitle;

}

else {
	echo "Your form is not submitted yet please fill the form and visit again";
}
?>


</body>
</html>