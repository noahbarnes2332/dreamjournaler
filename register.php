<?php
 ob_start();
 session_start();
 if( isset($_SESSION['user'])!="" ){
  header("Location: home.php");
 }
 include_once 'Dao.php';

 $error = false;

 if ( isset($_POST['btn-signup']) ) {
  
  $firstName = trim($_POST['firstName']);
  $firstName = strip_tags($firstName);
  $firstName = htmlspecialchars($firstName);
  
  $lastName = trim($_POST['lastName']);
  $lastName = strip_tags($lastName);
  $lastName = htmlspecialchars($lastName);
  
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  
  // name validation
  if (empty($firstName)) {
   $error = true;
   $firstNameError = "Please enter your first name.";
  }else if (empty($lastName)) {
   $error = true;
   $lastNameError = "Please enter your last name.";
  }else if (strlen($firstName) < 3) {
   $error = true;
   $firstNameError = "First name must have atleat 3 characters.";
  }else if (strlen($lastName) < 3) {
   $error = true;
   $lastNameError = "Last name must have atleat 3 characters.";
  }else if (!preg_match("/^[a-zA-Z ]+$/",$firstName)) {
   $error = true;
   $firstNameError = "First name must contain alphabets.";
  }else if (!preg_match("/^[a-zA-Z ]+$/",$lastName)) {
   $error = true;
   $lastNameError = "Last name must contain alphabets.";
  }
  
  //email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  } else {
   $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
   }
  }
  // password validation
  if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "Password must have atleast 6 characters.";
  }
  
  $password = hash('sha256', $pass);
  
  if( !$error ) {
   
   $query = "INSERT INTO users(userFirstName,userLastName,userEmail,userPass) VALUES('$firstName','$lastName','$email','$password')";
   $res = mysql_query($query);
    
   if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered, you may login now";
    unset($firstName);
	unset($lastName);
    unset($email);
    unset($pass);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later..."; 
   } 
    
  }
  
  
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<link rel="stylesheet" href="styles.css">
<body>

<div class="form">

 <div id="login-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
     <div>
        
         <div>
             <h2 class="whiteText">Sign Up.</h2>
         </div>
        
         <div>
             <hr />
         </div>
            
         <?php
		 if ( isset($errMSG) ) {
		 ?>
		 <div>
             <div class="whiteText" <?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
		<span></span> <?php echo $errMSG; ?>
                </div>
     </div>
		<?php
		}
		?>
            
            <div>
             <div>
                <span><span></span></span>
				<input type="text" name="firstName" placeholder="Enter First Name" maxlength="50" value="<?php echo $firstName ?>" />
             </div>
                <span class="whiteText"><?php echo $firstNameError; ?></span>
            </div>
			
			<div>
             <div>
                <span><span></span></span>
				<input type="text" name="lastName" placeholder="Enter Last Name" maxlength="50" value="<?php echo $lastName ?>" />
             </div>
                <span class="whiteText"><?php echo $lastNameError; ?></span>
            </div>
            
            <div>
             <div>
                <span><span></span></span>
             <input type="email" name="email" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
                </div>
                <span class="whiteText"><?php echo $emailError; ?></span>
            </div>
            
            <div>
             <div>
                <span><span></span></span>
             <input type="password" name="pass" placeholder="Enter Password" maxlength="15" />
                </div>
                <span class="whiteText"><?php echo $passError; ?></span>
            </div>
            
            <div>
             <hr />
            </div>
            
            <div>
             <button type="submit" name="btn-signup">Sign Up</button>
            </div>
            
            <div>
             <hr />
            </div>
            
            <div>
             <a href="login.php">Sign in Here...</a>
            </div>
        
        </div>
   
    </form>
    </div> 

</div>

</body>
</html>
<?php ob_end_flush(); ?>