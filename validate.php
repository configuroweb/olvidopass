<?php
session_start();
include ("login.php");
login();

if(isset($_POST['submit']))
{
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$query = "SELECT username, password FROM admin WHERE username='$username' 
AND passcode='$password'";

$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
 $_SESSION['userid']=$row['userid'];
 header("Location: admin.php");
 echo 'hi there';
 exit;
  }
  else
     {
 echo 'oops  can not do it';
  }
 }
?>