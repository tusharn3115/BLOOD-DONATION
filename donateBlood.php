<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <title>DONATE BLOOD</title>
    <link rel="stylesheet" href="./userSideCss/style.css?v=4">

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
                <li><a href="/BloodDonationWebsite/index.php">Home</a></li>
                <li><a href="/BloodDonationWebsite/aboutUs.php">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="/BloodDonationWebsite/donateBlood.php">Donate</a></li>
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

    <div class="fullForm">
        <div class="donationForm1">
            <h1>Blood Type</h1>
            <form action="donateBlood.php" method="POST">
                <br><br>
                <select name="bloodgroup" >
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
        </div>




        <div class="donationForm2">
            <h1>Details</h1>
                <input type="text" name="fname" id placeholder="First Name" autocomplete="off" required>
                <input type="text" name="lname" id placeholder="Second Name" autocomplete="off" required>
                <input type="email" name="email" id placeholder="Email" autocomplete="off" required>
                <input type="text" name="address" id placeholder="Address" autocomplete="off" required>
                <textarea name="case" id cols="90" rows="10" placeholder="Case Description..." required></textarea>
                <button name="submit">Donate Now</button>
            </form>
        </div>
    </div>
</body>

</html>

<!-- establishing connection with database -->

<?php
// connection file included
include ('connection.php');

if (isset($_REQUEST['submit'])) {

    $bloodgroup = $_REQUEST['bloodgroup'];
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $case = $_REQUEST['case'];


    $insert_query = mysqli_query($con,"insert into dontformdata set type='$bloodgroup',firstname='$fname',lastname='$lname',email='$email',address='$address',description='$case'");

    if($insert_query>0){
        echo "data inserted successfully";
    }
    else{
        echo "Error";
    }


}

?>
