<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Blood Test Registration Form</title>
  <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
      /* background-color: (#510312); */
      background-color: #510312;
    }

    .container {
      max-width: 700px;
      width: 100%;
      background-color: #fff;
      padding: 25px 30px;
      border-radius: 5px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    }

    .container .title {
      font-size: 25px;
      font-weight: 500;
      position: relative;
    }

    .container .title::before {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      height: 3px;
      width: 30px;
      border-radius: 5px;
      background: linear-gradient(135deg, #4c0613, #a20636);
    }

    .content form .user-details {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin: 20px 0 12px 0;
    }

    form .user-details .input-box {
      margin-bottom: 15px;
      width: calc(100% / 2 - 20px);
    }

    form .input-box span.details {
      display: block;
      font-weight: 500;
      margin-bottom: 5px;
    }

    .user-details .input-box input {
      height: 45px;
      width: 100%;
      outline: none;
      font-size: 16px;
      border-radius: 5px;
      padding-left: 15px;
      border: 1px solid #ccc;
      border-bottom-width: 2px;
      transition: all 0.3s ease;
    }

    .user-details .input-box input:focus,
    .user-details .input-box input:valid {
      border-color: #4c0613;
    }

    form .gender-details .gender-title {
      font-size: 20px;
      font-weight: 500;
    }

    form .category {
      display: flex;
      width: 80%;
      margin: 14px 0;
      justify-content: space-between;
    }

    form .category label {
      display: flex;
      align-items: center;
      cursor: pointer;
    }

    form .category label .dot {
      height: 18px;
      width: 18px;
      border-radius: 50%;
      margin-right: 10px;
      background: #d9d9d9;
      border: 5px solid transparent;
      transition: all 0.3s ease;
    }

    #dot-1:checked~.category label .one,
    #dot-2:checked~.category label .two,
    #dot-3:checked~.category label .three {
      background: #9b59b6;
      border-color: #d9d9d9;
    }

    form input[type="radio"] {
      display: none;
    }

    form .button {
      height: 45px;
      margin: 35px 0
    }

    form textarea {
      resize: none;
      height: 105%;
      padding: 2%;
    }

    form select {
      height: 45px;
      width: 100%;
      outline: none;
      font-size: 16px;
      border-radius: 5px;
      padding-left: 15px;
      border: 1px solid #ccc;
      border-bottom-width: 2px;
      transition: all 0.3s ease;
    }

    form .button input {
      height: 100%;
      width: 30%;
      margin-top: 2%;
      margin-left: 35%;
      border-radius: 5px;
      border: none;
      color: #ffffff;
      font-size: 18px;
      font-weight: 500;
      letter-spacing: 1px;
      cursor: pointer;
      transition: all 0.3s ease;
      background-color: #510312;
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>
    // prevent reload post request
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href)
    }
  </script>
</head>

<body>



  <div class="container">
    <div class="title">SCHEDULE YOUR BLOOD TEST</div>
    <div class="content">

      <form action="bloodTest.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fname" autocomplete="off" required />
          </div>




          <div class="input-box">
            <span class="details">Selected your blood test</span>
            <select name="blood">
              <option>Full Blood Test</option>


            </select>
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" autocomplete="off" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phoneNo" autocomplete="off" required>
          </div>
          <div class="input-box">
            <span class="details">Appointment Date</span>
            <input type="date" placeholder="select date" name="date" autocomplete="off" required>
          </div>
          <div class="input-box">
            <span class="details">Message</span>
            <textarea rows="5" cols="43" name="message"> </textarea>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="BOOK NOW" name="bsubmit">
        </div>
      </form>
    </div>
  </div>

</body>

</html>





<?php
// connection file included
include('connection.php');

if (isset($_REQUEST['bsubmit'])) {

  $tname = $_REQUEST['fname'];
  $tblood = $_REQUEST['blood'];
  $temail = $_REQUEST['email'];
  $tphone = $_REQUEST['phoneNo'];
  $tdate = $_REQUEST['date'];
  $tmessage = $_REQUEST['message'];
  $tgender = $_REQUEST['gender'];

  $insert_query_test = "insert into blood_test_form(fname,blood,email,phoneNo,date,message,gender) values('$tname','$tblood','$temail',' $tphone','$tdate','$tmessage','$tgender')";

  $insert_data = mysqli_query($con, $insert_query_test);

  if ($insert_data > 0) {









    $to = "$temail";
    $subject = "Confirmation: Blood  Appointment Successful";
    $message = "
        <html>
            <head>
                <title>Confirmation: Blood Donation Registration </title>
            </head>
        
            <body>
                <div>
              
                Dear $tname;<br>

                I hope this email finds you well.<br>
                
                I am writing to confirm that your blood test appointment with RedLifeSaver has been successfully<br>
                scheduled. Your commitment to donating blood is truly commendable, and we appreciate your<br>
                willingness to contribute to saving lives.<br><br>
                
                Appointment Details:<br>
                
                Date: $tdate;
                <br><br>
                Best regards,
                <br>
                Team REDlifesaver.
        
            
            </body>
        </html>
        ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
    $headers .= 'From: REDlifesaver' . "\r\n";


    $result = mail($to, $subject, $message, $headers);






    if ($result == true) {
?>
      <script>
        alert('Blood Test Appointment Booked Successfully');
      </script>

<?php

      header('Location: /BloodDonationWebsite');
    }
  } else {
    echo "Error";
  }
}


?>