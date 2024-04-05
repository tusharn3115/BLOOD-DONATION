<?php











$to = "$email";
$subject = "Confirmation: Blood Donation Registration Successful";
$message = "
<html>
    <head>
        <title>Finish creating your account on SD CANTEEN</title>
    </head>

    <body>
        <div>
      
        Dear Donor,

        We hope this mail finds you well.
        
        I am writing to inform you that your registration for blood donation has been successfully processed. Your commitment to contributing to our community's health and well-being through this act of kindness is truly commendable.
        
        Your willingness to donate blood is invaluable, as it plays a vital role in saving lives and supporting those in need during critical times. Your generosity will undoubtedly make a significant difference in the lives of many individuals.
        
        We will be in touch with further details regarding the donation process, including scheduling and location, closer to the donation date. In the meantime, if you have any questions or require additional information, please do not hesitate to contact us.
        
        Once again, thank you for your compassion and willingness to give back to the community. Your donation will undoubtedly leave a lasting impact, and we are truly grateful for your support.
        
        Best regards,
        
        Team REDlifesaver.

    
    </body>
</html>
";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
$headers .= 'From: negitushar81@gmail.com' . "\r\n";


$result = mail($to, $subject, $message, $headers);


















?>