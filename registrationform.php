<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

include("registrationform.html");

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$birthday = filter_input(INPUT_POST, 'birthday');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$firstname= (isset($firstname)) ? $firstname : '';
$lastname = (isset($lastname)) ? $lastname : '';
$birthday = (isset($birthday)) ? $birthday : '';
$email = (isset($email)) ? $email : '';
$password = (isset($password)) ? $password : '';


if(empty($firstname)){
    print "<br>Error in Firstname Field: you must enter your firstname<br>";
}

if(empty($lastname)){
    print "<br>Error in Lastname Field: you must enter your lastname<br>";
}

if(empty($birthday)){
    print "<br>Error in Birthday Field: you must enter your birthday<br>";
}

if(empty($email)){
    print "<br>Error in Firstname Field: you must enter your firstname<br>";
}

if(empty($password)){
    print "<br>Error in Firstname Field: you must enter your firstname<br>";
}

$passlen = strlen($password);
if ($passlen < 8) {
    echo "<br>Error in Password Field: invalid password length: " . $password . " is not at least 8 characters long<br>";
}

print "<br><br>";
print "firstname: $firstname";
print "<br><br>";
print "lastname: $lastname";
print "<br><br>";
print "birthday: $birthday";
print "<br><br>";
print "email: $email";
print "<br><br>";
print "password: $password";
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