<?php  
if(isset($_COOKIE[session_name()])){
	setcookie(session_name(), '' , time()-86400 ,'/');
}
session_start();
session_unset();

session_destroy();

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <div class = "container">
    	 <div style="font-size: 19px; padding:80px;">
    	<?php 
    	echo "you've been logged out ! see you next time.<br><br>";

        echo "<p><a href = 'login2.php' class = 'btn btn-primary btn-sm'>log back</a> in?</p>";
        ?>
        
    </div>
     </div>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
   <!--integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!--integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"> -->
  </body> <!-- integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

<!-- Optional theme -->

</html>
<!-- Latest compiled and minified CSS -->
