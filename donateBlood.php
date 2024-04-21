<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <title>DONATE BLOOD</title>
    <link rel="stylesheet" href="./userSideCss/style.css?v=6">

    <script>
        // prevent reload post request
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href)
        }
    </script>

</head>

<body>







    <!--navbar section -->

    <header id="head">
        <div class="logo">
            <img src="./userSideImg/logo.png" alt>
            <h2><span>RED</span>lifesaver</h2>
        </div>




        <!-- nav bar -->

        <div class="list">
            <ul>
                <a href="./index.php">Home</a>
                <a href="./aboutUs.php">About Us</a>
                <a href="./bloodTest.php">Blood Test</a>
                <a href="./donateBlood.php">Donate</a>
            </ul>
        </div>
    </header>







    <!-- donation part header img-->

    <div class="donationImg">
        <div class="black"></div>
        <h2>Donate Now</h2>
        <h4><a href="/BloodDonationWebsite/index.php">Home / </a><span>Donate Now</span></h4>
        <img src="./userSideImg/donationPage1.jpg" alt>
    </div>

    <div class="FormHeading">
        <h1>Make a Donation</h1>
    </div>







    <!-- donation form -->
    <form action="./donateBlood.php" method="POST" enctype="multipart/form-data">
        <div class="fullForm">
            <div class="donationForm1">
                <h1>Blood Type</h1>
                <br><br>
                <select name="bloodgroup">
                    <option value="default">Select your blood type</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
    </form>
    </div>




    <div class="donationForm2">
        <h1>Personal Details</h1>
        <input type="text" name="fname" id placeholder="First Name" autocomplete="off" required>
        <input type="text" name="lname" id placeholder="Last Name" autocomplete="off" required>
        <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
        <input type="tel" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required pattern="[0-9]{10}">
        <textarea name="case" id cols="90" rows="10" placeholder="Health Description or any Disease..." required></textarea>
        <br>


        <h1>Address</h1>
        <input type="text" name="address" id="address" placeholder="Complete Address" autocomplete="off" required>
        <input type="text" name="pincode" id="pincode" required placeholder="Enter pincode" inputmode="numeric" pattern="[0-9]{6}" autocomplete="off" required>


        <select name="district" id="district">
            <option value="default">Select your district</option>
            <option value="panchkula">Panchkula</option>
            <option value="chandigarh">Chandigarh</option>
        </select>

        <h1 style="margin-top: 50px;">Upload Blood Report</h1>
        <input type="file" name="images" id="file" required>


        <button name="submit" style="margin-bottom: 25px;border-radius:20px">Donate Now</button>
    </div>
    </div>
    </form>






    <!-- footer part -->
    <footer class="end">
        <img src="./userSideImg/footerImg (1).jpg" alt="" id="e1" />
        <div class="h1">
            <img src="./userSideImg/logo.png" alt="" id="e2" />
            <h2><span>RED</span>lifesaver</h2>
            <h3>

                Join RedLifeSaver, where every click saves a life. Donate blood, share hope, and be a hero today!
            </h3>
            <!-- <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i> -->
        </div>

        <div class="h2">
            <h3>Quick links</h3>
            <a href="./aboutUs.php">ABOUT US</a>
            <a href="#">CHARITY</a>
            <a href="#">FAQ</a>
            <a href="#">TERM & CONDITIONS</a>
        </div>

        <div class="h3">
            <h3>USEFUL LINKS</h3>
            <a href="#"><i class="fa-solid fa-location-dot"></i>S.D COLLEGE,SECTOR: 32
                A,CHANDIGARH</a>
            <a href="#"><i class="fa-solid fa-phone"></i>+91 1234567890</a>
            <a href="#"><i class="fa-solid fa-envelope"></i>redlifesaver@gmail.com</a>
        </div>

        <div class="work">
            <h3>WORK HOURS</h3>
            <h2>MON - FRI : 9:00 AM - 19:00 PM</h2>
            <h4>NEED HELP? CONTACT US</h4>
            <button><i class="fa-solid fa-phone"></i>CONTACT US</button>
        </div>
    </footer>
</body>

</html>








<!-- establishing connection with database -->

<?php

// connection file included
require('connection.php');

if (isset($_REQUEST['submit'])) {
    date_default_timezone_set("Asia/Calcutta");
    $Date = date("Y/m/d");
    $time = date('H:i:s');
    $bloodgroup = $_REQUEST['bloodgroup'];
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $case = $_REQUEST['case'];
    $address = $_REQUEST['address'];
    $pincode = $_REQUEST['pincode'];
    $district = $_REQUEST['district'];



    // storing image into folder
    $OriginalFileName = $_FILES['images']['name'];
    // echo $OriginalFileName;
    //file name temporary
    $tmp_name = $_FILES['images']['tmp_name'];

    $location = "./userBloodReports/";
    //generating unique name for images
    $newLocationFileName = $location . time() . "-" . rand(1000, 9999) . "-" . $OriginalFileName;
    if (move_uploaded_file($tmp_name,  $newLocationFileName)) {
        $insert_query = mysqli_query($con, "insert into dontformdata set insert_time='$time',insert_date='$Date',type='$bloodgroup',firstname='$fname',lastname='$lname',email='$email',phone='$phone',description='$case',address='$address',pincode='$pincode',district='$district',file='$newLocationFileName'");

        if ($insert_query > 0) {
    
    
    
    
                    $to = "$email";
                    $subject = "Confirmation: Blood Donation Registration Successful";
                    $message = "
                    <html>
                        <head>
                            <title>Confirmation: Blood Donation Registration </title>
                        </head>
    
                        <body>
                            <div>
    
                            Dear $fname,<br><br>
    
                            We hope this mail finds you well.<br>
    
                            I am writing to inform you that your registration for blood donation has been successfully processed. Your commitment to contributing to our community's health and well-being through this act of kindness is truly commendable.<br><br>
    
                            Your willingness to donate blood is invaluable, as it plays a vital role in saving lives and supporting those in need during critical times. Your generosity will undoubtedly make a significant difference in the lives of many individuals.<br><br>
    
                            We will be in touch with further details regarding the donation process, including scheduling and location, closer to the donation date. In the meantime, if you have any questions or require additional information, please do not hesitate to contact us.<br><br>
    
                            Once again, thank you for your compassion and willingness to give back to the community. Your donation will undoubtedly leave a lasting impact, and we are truly grateful for your support.<br>
                            <br>
                            Best regards,
                            <br>
                            Team REDlifesaver.
    
    
                        </body>
                    </html>
                    ";
                    // Always set content-type when sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: cognitivecorner2@gmail.com' . "\r\n";
    
    
                    $result = mail($to, $subject, $message, $headers);
    
    
    
    
    
    
                    if ($result == true) {
    
                echo "<script>
                alert('Record Successfully Registered');
            </script>"     ;   
    
    
                        // header('Location: /BloodDonationWebsite');
                    }
                else {
                    echo "Error";
                }
        }
    }





}


?>