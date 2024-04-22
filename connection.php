<?php

$username = 'root';
$password = ''; 
$server = 'localhost';
$db = 'redlifesaver';


$con = mysqli_connect($server, $username, $password, $db);

if($con){

    // echo "connection established successful";

}

else{
    die("No Connection");
}


?>