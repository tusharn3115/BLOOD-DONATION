<?php

$username = 'root';
$password = '';
$server = 'localhost';
$db = 'donationformdata';


$con = mysqli_connect($server, $username, $password, $db);

if($con){

?>
<!-- connection alert message -->
    <!-- <script>
alert('Connection Successful with Database');
</script> -->
<?php
}

else{
    die("No Connection");
}


?>