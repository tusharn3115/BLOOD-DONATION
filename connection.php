<?php

$username = 'root';
$password = '';
$server = 'localhost';
$db = 'donationformdata';


$con = mysqli_connect($server, $username, $password, $db);

if($con){


}

else{
    die("No Connection");
}


?>