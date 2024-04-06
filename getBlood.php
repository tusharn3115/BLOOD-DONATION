<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Blood</title>
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./userSideCss/style.css?v=8">
    <link rel="stylesheet" href="./userSideCss/getBlood.css?v=12">
</head>
<body>
    

        <!--header section -->
        <header id="head">
            <div class="logo">
            
            <img src='./userSideImg/logo.png' alt='logo img'>
                 
             
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


    <div class="donationImg1">
        <div class="black"></div>
        <h2>"Seeking a Lifesaver: Search for a Donor"</h2>
        <!-- <h4><a href="./bloodTest.php"><button>Blood Test</button></a></h4> -->
        <img src="./userSideImg/bloodTest.jpg" alt="error">
    </div>

    <div class="FormHeading1">
        <h1>Search for donor</h1>
    </div>





        <!-- MAIN SECTION -->
<section class="register">
<h1>Blood Stock Availability</h1>
<hr>
<br>
<div class="searchBlood">
<h3>Search Blood Stock</h3>
    <form action="">
    <select name="selectBlood" >
                    <option value="default">Select for blood type</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>    
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
    </select>
   

    <select name="sectors" id="">
        <option value="">Gender</option>
        <option value="sectors">Male</option>
        <option value="sectors">Female</option>
        <option value="sectors">Others</option>
    </select>

    <select name="district" id="">
        <option value="">Select district</option>
        <option value="">Chandigarh</option>
        <option value="">Panchkula</option>
    </select>

    <textarea name="" id="" cols="126" rows="10" placeholder="Description for blood need purpose..." required></textarea>
    <br>
    <button>Search</button>
    </form>
</div>
</section>

<footer class="end">
        <img src="./userSideImg/footerImg (1).jpg" alt="" id="e1" />
        <div class="h1">
            <img src="./userSideImg/logo.png" alt="" id="e2" />
            <h2><span>RED</span>lifesaver</h2>
            <h3>
                Join RedLifeSaver, where every click saves a life. Donate blood, share hope, and be a hero today!
            </h3>
        </div>

        <div class="h2">
            <h3>Quick links</h3>
            <a href="#">ABOUT US</a>
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