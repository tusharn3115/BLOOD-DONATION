<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DONATE BLOOD</title>
    <link rel="stylesheet" href="./userSideCss/style.css?v=3">
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
            <form action="" method="POST">
                <br><br>
                <select name="bloodType" id="" required>
                    <option value="type">Select your blood type</option>
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
            <h1>Details</h1>
            <form action="" method="POST">
                <input type="text" name="fname" id placeholder="First Name" required>
                <input type="text" name="lname" id placeholder="Second Name" required>
                <input type="email" name="email" id placeholder="Email" required>
                <input type="text" name="address" id placeholder="Address" required>
                <textarea name="casedes" id cols="90" rows="10" placeholder="Case Description..." required></textarea>
                <button name="donate">Donate Now</button>
            </form>
        </div>
    </div>
</body>

</html>










<!-- establishing connection with database -->

<?php


// connection file included
include 'connection.php';



// inserting form data when the donate button is pressed

if (isset($_POST['donate'])) {


    $BloodType = $_POST['bloodType'];
    $FirstName = $_POST['fname'];
    $LastName = $_POST['lname'];
    $Email = $_POST['email'];
    $Address = $_POST['address'];
    $Desc = $_POST['casedes'];




    // insert query of sql to insert form data into database

    $insertquery = " insert into dontformdata(BloodType,FirstName,LastName,Email,Address,CaseDes) values ('$BloodType','$FirstName','$LastName','$Email','$Address','$Desc') ";




    // printing the result that if the data is stored or not
    $result = $mysqli_query($con, $insertquery);

    if ($result) {
?>


        <!-- script tag for an alert if the data is stored or not -->
        <script>
            alert("Your data was stored successfully. Thankyou for being a donor :) .");
        </script>


    <?php


    } else {
    ?>

        <script>
            alert("There was an error while storing your data, please try again later :( .");
        </script>

<?php
    }
}




?>