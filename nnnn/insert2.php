<?php 
include('connection2.php');
if (isset( $_POST["add"])) { 
  function validateFormData( $formdata){
    $formdata = trim(stripslashes(htmlspecialchars($formdata)));
    return $formdata;
  }
   $username = $password = $email = $birth_of_date = 0;
  /*if (!$_POST["id"]) {
    $iderror = "please enter your id<br>";
  }
    else{
    $id = validateFormData( $_POST["id"]);
  }*/
  if (!$_POST["username"]) {
    $usernameerror = "please enter your username<br>";
  }
  else{
    $username = validateFormData( $_POST["username"]);
  }
  if (!$_POST["email"]) {
    $emailerror = "please enter your E-mail<br>";
  }
    else{
    $email = validateFormData( $_POST["email"]);
  }
    if (!$_POST["password"]) {
    $passworderror = "please enter your password <br>";
  }
  else{
    $password = validateFormData( $_POST["password"]);
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
  }
        
       
  
  if (!$_POST["birth_of_date"]) {
    $dateerror = "please enter your birth_of_date<br>";
  }
    else{
    $birth_of_date = validateFormData( $_POST["birth_of_date"]);
  }
if ( $username && $password && $email && $birth_of_date) {

   $query = "INSERT INTO addsign(username,email,password,birth_of_date) 
  VALUES ( '$username', '$email','$password','$birth_of_date')";

if(mysqli_query($conn,$query)) {
     echo "<div class = ' alert alert-success'>Sign up successfully!</div>";
     header("Location: login2.php");
} 
else{ 
echo "Error: " . $query ."<br>" . mysqli_error($conn);

}
}
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
    <title>Sign up</title>
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
    <div class = "container">
    <h1>Sign up</h1>

<p class = text-danger>Required field</p>
<form action = "<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] );?>" method = "post">
 <!-- <small class = "text-danger"> *<?php echo $iderror;?></small>
<input type = "text" placeholder = "ID" name = "id"><br><br> -->

<small class = "text-danger"> *<?php echo $usernameerror;?></small>
<input type = "text" placeholder = "Username" name = "username"><br><br>

<small class = "text-danger"> *<?php echo $emailerror;?></small>
<input type = "email" placeholder = "E-mail" name = "email"><br><br>

<small class = "text-danger"> *<?php echo $passworderror;?></small>
<input type = "password" placeholder = "Password" name = "password"><br><br>

<small class = "text-danger"> *<?php echo $dateerror;?></small>
<input type = "date" placeholder = "Birth-of-date" name = "birth_of_date"><br><br>

<input type ="submit" name ="add" class = 'btn btn-primary btn-sm' value = "Signup">
</form>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
   <!--integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!--integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"> -->
  </body> <!-- integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

<!-- Optional theme -->

</html>
<!-- Latest compiled and minified CSS -->
