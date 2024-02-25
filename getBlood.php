<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./userSideCss/getBlood.css?v=5">
</head>
<body>
    
<h2>Blood Stock Availability</h2>
<div class="searchBlood">
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
    <br><br>

    <textarea name="why" id="" cols="40" rows="5" placeholder="Why you need blood(description...)"></textarea>
    <br><br>
    Upload your blood report : <input type="file" name="fileupload" id="">
    <br><br>
    <button>Search</button>
    </form>
</div>
</body>
</html>