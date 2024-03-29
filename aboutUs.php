<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./userSideCss/style.css?v=3">
    <link rel="stylesheet" href="./userSideCss/aboutUs.css?v=4">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
</head>

<body>


    <!--header section -->
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

    <!-- image main at the start -->
    <div class="aboutUs-main">

        <div class="aboutUs-img-main">
            <img src="./userSideImg/about-us-page-img.jpg" alt>
        </div>

        <div class="aboutUs-contacts">
            <h1>About Us</h1>
            <div class="aboutUs-contact-details">
                <p>Saving lives, one donation at a time.Be a hero today.
                    <br>Give blood, give hope.Join the cause. <br>Donate
                    now!
                </p>
            </div>
            <div class="aboutUs-page">
                <p><a href="/BloodDonationWebsite/index.php">Home</a> / <span>About Us</span></p>
            </div>

        </div>

    </div>

    <!-- about-us-container -->
    <div class="about1-us">
        <h3>About Us</h3>
        <h1>"Discover Our Mission: Empowering Hope, <br> Unity, and
            Lifesaving Impact"</h1>
        <div class="about1_container">

            <div class="aboutus1-details">
                <p>
                    <span>Red Life Saver</span> Where every heartbeat
                    matters. Our platform unites donors and recipients in a
                    lifesaving mission. With compassion at our core, we
                    empower individuals to make a difference. Together,
                    we're a lifeline for those in need, spreading hope and
                    healing across communities.
                    <br><br><br>
                    We're a passionate group dedicated to saving lives
                    through the noble act of donating blood. Join us in our
                    mission to provide hope and healing to those in need.
                    Together, we make a difference—one donation at a time.
                    Join us and be a hero today!
                </p>
            </div>
            <div class="aboutus1-img">
                <img src="./userSideImg/aboutUs-container.jpeg" alt>
            </div>
        </div>

        <!-- our mission
            <div class="ourmission">
                <div class="ourmission-head">
                    <h1>OUR MISSION</h1>
                    <p>Blood bonds: uniting hearts, saving lives, one
                        donation</p>
                </div>
                <div class="out">
                    <div class="iicon1">
                        <i class='bx bx-donate-blood'></i>
                        <h5>Promoting the right and wellbeing of every person,
                            in everything we do.</h5> -
                    </div>

                    <div class="iicon2">
                        <i class='bx bx-globe'></i>
                        <h5>Supporting Hope programs for people in more than 100
                            cities.</h5>
                    </div>

                    <div class="iicon3">
                        <i class='bx bxs-hand'></i>
                        <h5>Focus on reaching the most vulnerable donors to
                            benefit all recipients, everywhere.</h5>
                    </div>
                </div>
            </div> -->


        <!-- number count section -->
        <div class="counter-up">
            <div class="content">
                <div class="box">
                    <div class="counter" data-target="724">724</div>
                    <div class="text">Total Registration</div>
                </div>
                <div class="box">
                    <div class="counter" data-target="436">436</div>
                    <div class="text">Blood Donations</div>
                </div>
                <div class="box">
                    <div class="counter" data-target="508">508</div>
                    <div class="text">Blood Collected</div>
                </div>
                <div class="box">
                    <div class="counter" data-target="120">120</div>
                    <div class="text">Donation Camps</div>
                </div>
            </div>
        </div>

        <!-- who we are -->


        <div class="who">
            <div class="whoImg">
            <img src="./userSideImg/whoweare.jpg" alt="">  
            </div>

            <div class="who-content">
            <h1>WHO WE ARE</h1>
            <h3>We are here not for income, but for outcome</h3>
            <p>We are a compassionate team dedicated to saving lives through blood donation. <br> With a shared <br>commitment to community health, our website serves as a vital <br> platform connecting donors and recipients.</p>
            </div>
        </div>

        <!-- script for number counter system -->
        <script>
            $(document).ready(function() {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1200
                });
            });
        </script>


</body>

</html>