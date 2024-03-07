<?php
$to_email = "cognitivecorner2@gmail.com";
$subject = " Confirmation: Blood Donation Registration Successful";
$body = "Dear Donor,

We hope this mail finds you well.

I am writing to inform you that your registration for blood donation has been successfully processed. Your commitment to contributing to our community's health and well-being through this act of kindness is truly commendable.

Your willingness to donate blood is invaluable, as it plays a vital role in saving lives and supporting those in need during critical times. Your generosity will undoubtedly make a significant difference in the lives of many individuals.

We will be in touch with further details regarding the donation process, including scheduling and location, closer to the donation date. In the meantime, if you have any questions or require additional information, please do not hesitate to contact us.

Once again, thank you for your compassion and willingness to give back to the community. Your donation will undoubtedly leave a lasting impact, and we are truly grateful for your support.

Best regards,

REDlifesaver Team";
$headers = "From: Team REDlifesaver";

if (mail($to_email, $subject, $body, $headers)) {
    ?>
<script>window.location.replace("donateBlood.php");</script>

<?php
} else {
    echo "Email sending failed...";
}
