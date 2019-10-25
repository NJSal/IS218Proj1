<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include("loginform.html");

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$email = (isset($email)) ? $email : '';

$password = (isset($password)) ? $password : '';

$j = strpos($email, '@');
if($j == false){print "<br> no @ characters found<br>";}
if(empty($email)) {print "<br>Error in Email Field: you must enter your email<br>";}

$plen = strlen($password);
if($plen < 8) {echo "<br>Error in Password Field: invalid password length: ".$password." is not at least 8 characters long<br>";}
if(empty($password)) {print "<br>Error in Password Field: you must enter your password<br>";}

print "<br><br>";
print "Email: $email";
print "<br><br>";
print "Password: $password";

/*
$i = strpos($email," ");
$j = strpos($password, " ");
if($i==true || $j==true)
{
    echo "<br><h2> Error in Field Input: Please do not put spaces in responses </h2><br>";
}
*/

/*
$state = -2;
$email = $_POST["email"]; print "<br>email is: $email";
$password = $_POST["password"]; print "<br>password is: $password";

if($email == " "){$state = -1;}
if($password == " "){$state = -1;}
*/
?>



