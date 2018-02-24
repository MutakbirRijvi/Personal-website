<?php

if (isset( $_POST['login'])) { 
  function validateFormData( $formdata){
    $formdata = trim(stripslashes(htmlspecialchars($formdata)));
    return $formdata;
  }
  $formUser = validateFormData($_POST['username']);
  $formPass = validateFormData($_POST['password']);

include('connection2.php');

$query = "SELECT username, password FROM addsign WHERE username='$formUser'";

$result = mysqli_query( $conn,$query );

    if (mysqli_num_rows($result) > 0) {
  
  while ( $row = mysqli_fetch_assoc($result) ) {
    $user = $row['username']; 
    //$ID = $row['id'];
    $hashedpass = $row['password'];
  }
  if(password_verify( $formPass, $hashedpass )){

    session_start();

    $_SESSION['loggedInUser'] = $user;
    $_SESSION['loggedInId'] = $ID;

    header("Location: profile2.php");
  }
  else {
    $loggedinerror = "<div class = 'alert alert-danger'> Wrong username or password. Please try again.</div>";
  }
}
else {
    $loggedinerror = "<div class = 'alert alert-danger'> No such user in database.please sign up first. <a class = 'close' data-dissmiss = 'alert'>&times;</a></div>";

}

mysqli_close($conn);

}
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="robots" content="noodp, noydir"> 
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css">
    <script src="bootstrap1/js/bootstrap.min.js"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 

    <!-- Bootstrap -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
    <div class ="container">

    <h1>Login</h1>
    <p class = "lead">You must login first !.Use this form to login your account.You have no account?? please  <a href="insert2.php" class = 'btn btn-primary btn-sm' >Sign up</a>  first!</p>
    <?php 
     echo $loggedinerror;
    ?>
    
    <form class = "form-inline" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
    <div class = "form-group">
    <label for = "login-username" class = "sr-only">Username</label>
    <input type = "text" class ="form-control" id = "login-username " placeholder ="username" name = "username" >
    </div>

    <div class = "form-group">
    <label for = "login-password" class = "sr-only">Password</label>
    <input type = "password" class ="form-control" id = "login-password " placeholder ="password" name = "password" >
    </div>
    <button type = "submit" class = 'btn btn-primary btn-sm' name = "login"  >Log in</button>
    </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <!--integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!--integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"> -->
  </body> <!-- integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

<!-- Optional theme -->
</html>
<!-- Latest compiled and minified CSS -->
