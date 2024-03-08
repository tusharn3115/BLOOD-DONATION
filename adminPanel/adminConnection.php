<?php

$username = 'root';
$password = '';
$server = 'localhost';
$db = 'redlifesaver';


$conn = mysqli_connect($server, $username, $password, $db);

if($conn){

}

else{
    die("No Connection");
}

?>