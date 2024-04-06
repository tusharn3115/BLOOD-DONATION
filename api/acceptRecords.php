<?php
include("../adminPanel/adminConnection.php");
$id=$_REQUEST['id'];
$email=$_REQUEST['email'];


// get user data
$query1="select* from dontformdata where id=$id";
$res=mysqli_query($conn,$query1);

$countRecord=mysqli_num_rows($res);
if($countRecord>0){

$data=mysqli_fetch_assoc($res);


$dfirstname=$data['firstname'];
$dlastname=$data['lastname'];
$demail=$data['email'];
$dphone=$data['phone'];
$daddress=$data['address'];
$ddistrict=$data['district'];
$dpincode=$data['pincode'];
$dtype=$data['type'];
$ddescription=$data['description'];

$insertNewRecordQuery="insert into donors(dfirstname,dlastname,demail,dphone,daddress,ddistrict,dpincode,dtype,ddescription) values('$dfirstname','$dlastname','$demail','$dphone','$daddress','$ddistrict','$dpincode','$dtype','$ddescription')";
mysqli_query($conn,$insertNewRecordQuery);


// deleting from dontformdata db

$queryToDelete = "delete from dontformdata where id=$id";

$to = "$email";
$subject = "Confirmation: Blood Donation Request Approved";
$message = "
<html>
    <head>
        <title>Confirmation: Blood Donation Request Approved </title>
    </head>

    <body>
        <div>
      
        Dear Donor,

        I hope this email finds you well,<br> 
        Approved<br><br>

        I want to assure you that your willingness to donate is deeply valued, and your gesture of kindness does not go unnoticed. Your willingness to support those in need is admirable and reflects your compassionate nature.<br>
        Although we are unable to accept your donation at this time, I encourage you to continue supporting our cause in other ways, such as raising awareness, encouraging others to donate, or participating in future donation drives when circumstances permit.<br>
        Once again, I extend my heartfelt appreciation for your altruistic spirit and your offer to donate blood. If you have any questions or would like further information, please do not hesitate to reach out.<br>
        Thank you for your understanding and continued support.<br><br>

        Warm regards,<br>
        Team REDlifesaver.

    
    </body>
</html>
";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
$headers .= 'From: negitushar81@gmail.com' . "\r\n";


$result = mail($to, $subject, $message, $headers);


if ($result) {

    $res = mysqli_query($conn, $queryToDelete);
    $countCounts = mysqli_affected_rows($conn);

    if ($countCounts > 0) {
        echo "success";
    }
}





}



?>


