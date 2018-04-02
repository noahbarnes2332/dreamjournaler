<?php
 ob_start();
 session_start();
 require_once 'Dao.php';
 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: index.php");
  exit;
 }
 
 $error = false;
 
 if( isset($_POST['btn-login']) ) { 
  
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  
  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }
  
  if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
  }
  
  if (!$error) {
   
   $password = hash('sha256', $pass);
  
   //$res=mysql_query("SELECT userId, userFirstName, userLastName, userPass FROM users WHERE userEmail='$email'");
   $res=mysqli_query($success, "SELECT userId, userFirstName, userLastName, userPass FROM users WHERE userEmail='$email'");
   
   $row=mysqli_fetch_array($res);
   $count = mysqli_num_rows($res);
   
   if( $count == 1 && $row['userPass']==$password ) {
    $_SESSION['user'] = $row['userId'];
    header("Location: index.php");
   } else {
    $errMSG = "Incorrect Credentials, Try again...";
   }
    
  }
  
 }
?>

<!DOCTYPE html>
<html>
<head>
<title>Sign In</title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<link rel="stylesheet" href="styles.css">
<body>

<div class="form">

 <div id="login-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
     <div>
        
         <div>
             <h2 class="whiteText">Sign In.</h2>
            </div>
        
         <div>
             <hr />
            </div>
            
            <?php
			if ( isset($errMSG) ) {
			?>
			<div class="whiteText">
			 <?php echo $errMSG; ?>
            </div>
            <?php
			}
			?>
            
            <div>
             <div>
                <span><span></span></span>
             <input type="email" name="email" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
                </div>
                <span class="whiteText"><?php echo $emailError; ?></span>
            </div>
            
            <div>
             <div class="input-group">
                <span><span></span></span>
             <input type="password" name="pass" placeholder="Your Password" maxlength="15" />
                </div>
                <span class="whiteText"><?php echo $passError; ?></span>
            </div>
            
            <div>
             <hr />
            </div>
            
            <div>
             <button type="submit" name="btn-login">Sign In</button>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div>
             <a href="register.php">Sign Up Here</a>
            </div>
        
        </div>
   
    </form>
    </div> 

</div>


<div class="footer">
  <span> 2018 Noah Barnes<span>
</div>

</body>
</html>
<?php ob_end_flush(); ?>