<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

</body>
</html>