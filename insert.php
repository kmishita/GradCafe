<!DOCTYPE html>
<html lang="en">
  <body>

  <div class="center" style="margin-top:5%;">
  <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "Jaisairam.16", "JobPortal");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$email = mysqli_real_escape_string($link, $_REQUEST['emailID']);
$name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$age = mysqli_real_escape_string($link, $_REQUEST['Age']);
$gender = mysqli_real_escape_string($link, $_REQUEST['Gender']);
$contact = mysqli_real_escape_string($link, $_REQUEST['Contact']);
$skill = mysqli_real_escape_string($link, $_REQUEST['Skill']);
$details = mysqli_real_escape_string($link, $_REQUEST['CompanyDetails']);


// attempt insert query execution
$sql = "INSERT INTO Student (emailID, Name, Age, Gender, Contact, Skill, CompanyDetails) VALUES ('$email', '$name', '$age', '$gender', '$contact', '$skill', '$details')";
if(mysqli_query($link, $sql)){
  session_start();
  $_SESSION['user'] = $name;
  echo " Dear ".$_SESSION['user']." you have been registered with us.";
//echo"<a href="portfolio.php"> Continue viewing jobs </a>";

/*
$cookie_name = "users";
$cookie_value = array();
array_push($cookie_value,$name);
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
*/



} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);


?>
</div>
</body>
</html>
