<html>
<body>



<?php

if (isset($_POST['submit'])) {  

$title = $_Post['name'];
var_dump($title);
echo "\n";
print_r($_POST);


/*
print_r($post_body);
print_r($_POST);
//$my_post = $_POST;

$title = $_Post['name'];
$entry = $_Post['email'];

echo $title;
echo $entry;

$str = "Hello world!";
echo $str;

$testtitle = my_post['name'];
echo $testtitle;*/

}

else {
	echo "Your form is not submitted yet please fill the form and visit again";
}
?>


</body>
</html>