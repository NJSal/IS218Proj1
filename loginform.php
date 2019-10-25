<?php

include("loginform.html");

$state = -2;
$email = $_POST["email"]; print "<br>email is: '$email'";
$password = $_POST["password"]; print "<br>password is: $password";

if($email == " "){$state = -1;}
if($password == " "){$state = -1;}
if(strlen($password) == 8)



//taking care of empty
$i = strpos($email," ");
if($i == " ")
{
    $state = -1;
    echo "<br><h2> email field was left empty </h2><br>";
}
/*
else
    {echo "<br><h2> good email </h2><br>";}
*/

//


//taking care of empty
$j = strpos($email, '@');
if($j == false){print "<br><h2> no @ characters found </h2><br>";}
//{echo "<br><h2> @ characters found</h2><br>";}

?>



