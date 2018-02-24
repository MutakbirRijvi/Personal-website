<?php 
session_start();
include('connection2.php');
if (isset( $_POST["add"])) { 
  function validateFormData( $formdata){
    $formdata = trim(stripslashes(htmlspecialchars($formdata)));
    return $formdata;
  } 

   $id = $name = $phone = $address = $biography = $birth_of_date = 0;
  if (!$_POST["id"]) {
    $iderror = "please enter your id<br>";
  }
    else{
    $id = validateFormData( $_POST["id"]);
  }
  if (!$_POST["name"]) {
    $nameerror = "please enter your name!<br>";
  }
  else{
    $name = validateFormData( $_POST["name"]);
  }
  if (!$_POST["contact_no"]) {
    $phoneerror = "please enter your Contact no!<br>";
  }
    else{
    $phone = validateFormData( $_POST["contact_no"]);
  }
    if (!$_POST["email"]) {
    $addresserror = "please enter your E-mail! <br>";
  }
  else{
    $address = validateFormData( $_POST["email"]);
   }
     if (!$_POST["biography"]) {
    $biographyerror = "please enter your biography!<br>";
  }
  else{
    $biography = validateFormData( $_POST["biography"]);
  }
    if (!$_POST["birth_of_date"]) {
    $birth_of_dateerror = "please enter your birth of date!<br>";
  }
  else{
    $birth_of_date = validateFormData( $_POST["birth_of_date"]);
  }
   
 
  
if ( $id && $name && $phone && $address && $biography && $birth_of_date) {

   $query = "INSERT INTO addressdb(id,name,contact_no,email,biography,birth_of_date) 
  VALUES ( '$id','$name', '$phone','$address','$biography','$birth_of_date')";


}
if ( !$_SESSION['loggedInUser']) {
  echo "<div class = ' alert alert-danger'>please login first !<a href = 'login.php' class = 'btn-sm'>Login</a></div>";
}

else if(mysqli_query($conn,$query)) {
     echo "<div class = ' alert alert-success'>you will get that book from our store! we will contact you and deliver that book !!</div>";
     header("Location: myaddbook.php");
} 
else{ 
echo "Error: " . $query ."<br>" . mysqli_error($conn);

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
    <title>Welcome!</title>
    <div style="background:url('img/login4.jpg') center center no-repeat;background-size: cover;color:black;padding:120px;">
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
    <p class = "lead">Welcome <?php echo $_SESSION['loggedInUser'];?>!</p>
    <p>To Add someone in the addressbook please follow these steps : </p>
     <div class = "container">
<form action = "<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] );?>" method = "post">
<small class = "text-danger"> *<?php echo $iderror;?></small>
<input type = "number" placeholder = "ID" name = "id"><br><br>

<small class = "text-danger"> *<?php echo $nameerror;?></small>
<input type = "text" placeholder = "Yourname" name = "name"><br><br>

<small class = "text-danger"> *<?php echo $phoneerror;?></small>
<input type = "number" placeholder = "Phonenumber" name = "contact_no"><br><br>

<small class = "text-danger"> *<?php echo $addresserror;?></small>
<input type = "email" placeholder = "E-mail" name = "email"><br><br>

<small class = "text-danger"> *<?php echo $biographyerror;?></small>
<input type = "text" placeholder = "Biography" name = "biography"><br><br>

<small class = "text-danger"> *<?php echo $birth_of_dateerror;?></small>
<input type = "date" placeholder = "Date of birth" name = "birth_of_date"><br><br>

<input type ="submit" name ="add" value = "Add" class = 'btn btn-success btn-sm'><br><br>
 <label>
          <input type="checkbox"> Remember me
        </label>
</form>
</div>
    <div>
    <br>
    <p>Leave the account??</p>
    <a href="logout2.php" class = "btn btn-danger btn-sm">Log out</a>
    </div>
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