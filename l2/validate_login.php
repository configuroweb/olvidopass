<?php

// Grab User submitted information
$email = $_POST["users_email"];
$pass = $_POST["users_pass"];

// Connect to the database
$con = mysqli_connect("localhost","root","","formdb");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

$query = "SELECT * FROM formtbl WHERE username = '$email' and password = '$pass'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);


// query eka variable ekata aran passe execute karaon 
if($row["username"]==$email && $row["password"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>