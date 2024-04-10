<?php
include("../adminPanel/adminConnection.php");
$id = $_REQUEST['id'];
$email = $_REQUEST['email'];


// get user data
$query1 = "select* from dontformdata where id=$id";
$res = mysqli_query($conn, $query1);

$countRecord = mysqli_num_rows($res);
if ($countRecord > 0) {

    $data = mysqli_fetch_assoc($res);


    $dfirstname = $data['firstname'];
    $dlastname = $data['lastname'];
    $demail = $data['email'];
    $dphone = $data['phone'];
    $daddress = $data['address'];
    $ddistrict = $data['district'];
    $dpincode = $data['pincode'];
    $dtype = $data['type'];
    $ddescription = $data['description'];

    $insertNewRecordQuery = "insert into donors(dfirstname,dlastname,demail,dphone,daddress,ddistrict,dpincode,dtype,ddescription) values('$dfirstname','$dlastname','$demail','$dphone','$daddress','$ddistrict','$dpincode','$dtype','$ddescription')";
    mysqli_query($conn, $insertNewRecordQuery);


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
      
        Dear Donor,<br><br>
        I hope this email finds you well. I am writing to formally approve the blood donor request<br>
        submitted through our website, REDlifesaver, and express our gratitude for their<br>
        willingness to contribute to such a noble cause.<br>
        <br><br>
        Upon careful review of the donor's application, we find them to be a suitable candidate to<br>
        participate in our blood donation program. Their commitment to saving lives aligns perfectly with<br>
        our mission to provide support to those in need within our community.<br>
        <br><br>
        Please convey our heartfelt thanks to the donor for their willingness to donate blood and for<br>
        choosing to partner with us in our efforts to save lives. We look forward to their participation in our<br>
        upcoming blood donation drives and events.<br>
        <br><br>
        Thank you once again for your dedication to our cause, and please feel free to reach out if you<br>
        have any questions or concerns.<br><br>
        Warm regards,<br>
        Team REDlifesaver.

    
    </body>
</html>
";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
    $headers .= 'From: cognitivecorner2@gmail.com' . "\r\n";


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