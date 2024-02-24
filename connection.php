<?php

$username = 'root';
$password = '';
$server = 'localhost';
$db = '';


$con = mysqli_connect($server, $username, $password);

if($con){

?>
<!-- connection alert message -->
    <script>
alert('Connection Successful');
</script>
<?php
}

else{
    die("No Connection");
}


?>