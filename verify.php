<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #for{
            border: 1px solid black;
            height: 350px;
            width: 400px;
            margin-left: 500px;
        }
        .lab{
            margin-left: 25px;
        }
        .in{
            margin-top: 20px;
            height: 26px;
        }
        #reg{
            margin-left: 77px;
        }
        #contact{
            margin-left: 40px;
        }
        #veri{
            height: 30px;
            width: 100px;
            margin-left: 150px;
            font-size: 19px;
        }
    </style>
</head>
<body>
<div id="menu">
        <a href="index.php">Home</a>
        <a href="Course.php">Course</a>
        <a href="verify.php">Verify</a>
        <a href="signup.php">SignUp</a>
        <a href="contact.php">ContactUs</a>
        <a href="certificate.php">Certificate</a>
    </div>
    <div>
        <h1>hello people....!!!</h1>
        <form action="detail.php" id="for" method="POST" enctype="multipart/form-data">
            <h1>Verification</h1><hr>
            <label for="" class="lab">Reg No.</label>
            <input type="text" name="reg" id="reg" class="in" placeholder="reg no........"><br><br><br>
            <label for="" class="lab">Contact No.</label>
            <input type="text" name="contact" id="contact" class="in" placeholder="contact no..........."><br><br><br><br><br>
            <input type="submit" id="veri" name="btn" value="btn">
        </form>
    </div>
</body>
</html>