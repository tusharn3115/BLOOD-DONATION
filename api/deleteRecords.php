<?php
include("../adminPanel/adminConnection.php");
$id = $_REQUEST['id'];
$email = $_REQUEST['email'];
$queryToDelete = "delete from dontformdata where id=$id";

$to = "$email";
$subject = "Rejection: Blood Donation Request Cancelled";
$message = "
<html>
    <head>
        <title>Rejection: Blood Donation Request Cancelled </title>
    </head>

    <body>
        <div>
      
        Dear Donor,

        I hope this email finds you well,<br> 
        I regret to inform you that we are unable to accept your generous offer of blood donation at this time. This decision is not made lightly but is necessary due to a health issue or disease that has been identified.<br>
        Please understand that our primary concern is the well-being and safety of both donors and recipients. While your intention to contribute to our blood donation efforts is commendable, it is essential that we prioritize the health and safety of all individuals involved.<br><br>

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
    $countCount = mysqli_affected_rows($conn);

    if ($countCount > 0) {
        echo "success";
    }
}



?>