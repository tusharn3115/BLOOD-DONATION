<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Blood</title>
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="./userSideCss/style.css?v=8">
    <link rel="stylesheet" href="./userSideCss/getBlood.css?v=12">


    <script>
        // prevent reload post request
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href)
        }
    </script>
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
                <a href="./index.php">Home</a>
                <a href="./aboutUs.php">About Us</a>
                <a href="./bloodTest.php">Blood Test</a>
                <a href="./donateBlood.php">Donate</a>
            </ul>
        </div>
    </header>


    <div class="donationImg1">
        <div class="black"></div>
        <h2>"Seeking a Lifesaver: Search for a Donor"</h2>
        <!-- <h4><a href="./bloodTest.php"><button>Blood Test</button></a></h4> -->
        <img src="./userSideImg/bloodTest.jpg" alt="error">
    </div>






    <!-- MAIN SECTION -->


    <div class="container" >
        <div class="row">
            <div class="col-md-12 mt-6" style="margin-top: 8%;">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" style="font-weight: bolder;">Search For Donor Here.</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="./getBlood.php" method="post">
                                    <div class="form-group">
                                        <input type="text" name="bloodType" class="form-control" id="" placeholder="Enter Blood Type..." required autocomplete="off">  
                                    </div>
                                    <input type="submit" value="Search" name="search" style="background-color: red;width:16%;color:white; border:none; padding:1%; margin-top:3%; border-radius:25px">
                                    </form>
                           
                            </div>
                        <?php
                        include('connection.php');
                        if (isset($_POST['search'])) {
                            $type = $_POST['bloodType'];
                            $query = "select * from donors where dtype = '$type'";
                            $query_run = mysqli_query($con, $query);

                        ?>

                            <div class="table-responsive" style="margin-top:3%;">
                                <table class="table table-dark table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#Id</th>
                                            <th scope="col">FirstName</th>
                                            <th scope="col">LastName</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">District</th>
                                            <th scope="col">Pincode</th>
                                            <th scope="col">BloodType</th>
                                            <th scope="col">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_array($query_run)) {
                                        ?>
                                                <tr>
                                                    <td><?php echo $row['id_d']; ?></td>
                                                    <td><?php echo $row['dfirstname']; ?></td>
                                                    <td><?php echo $row['dlastname']; ?></td>
                                                    <td><?php echo $row['demail']; ?></td>
                                                    <td><?php echo $row['dphone']; ?></td>
                                                    <td><?php echo $row['daddress']; ?></td>
                                                    <td><?php echo $row['ddistrict']; ?></td>
                                                    <td><?php echo $row['dpincode']; ?></td>
                                                    <td><?php echo $row['dtype']; ?></td>
                                                    <td><?php echo $row['ddescription']; ?></td>
                                                </tr>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="6">No Record Found</td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
                        
    






















    <footer class="end" >
        <img src="./userSideImg/footerImg (1).jpg" alt="" id="e1" />
        <div class="h1">
            <img src="./userSideImg/logo.png" alt="" id="e2" />
            <h2><span>RED</span>lifesaver</h2>
            <h3>
                Join RedLifeSaver, where every click saves a life. Donate blood, share hope, and be a hero today!
            </h3>
        </div>

        <div class="h2" style="font-size: medium;">
            <h3>Quick links</h3>
            <a href="#">ABOUT US</a>
            <a href="#">CHARITY</a>
            <a href="#">FAQ</a>
            <a href="#">TERM & CONDITIONS</a>
        </div>

        <div class="h3"  style="font-size: medium;">
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



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>