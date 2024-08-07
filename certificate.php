<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
                *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #form{
            border: 2px solid black;
            height: 250px;
            width: 350px;
            text-align: center;
            margin-left: 480px;
            margin-top: 30px;
            border-radius: 20px;
            background-color: rgba(63, 160, 128, 0.633);
        }
        #lab{
            font-size: 25px;
            
        }
        #cno{
            height: 40px;
            width: 220px;
            margin: 20px;
            /* margin-top: 20px; */
        }
        #bt{
            font-size: 20px;
            width: 280px;
            height: 35px;
            background-color: green;
        }
    </style>
</head>
<body>
<div id="menu">
        <a href="index.php">Home</a>
        <a href="Course.php">Course</a>
        <a href="read.php">Verify</a>
        <a href="update.php">SignUp</a>
        <a href="delete.php">ContactUs</a>
        <a href="certificate.php">Certificate</a>
    </div>
    <div id="form">
        <form action="verifyuser.php" method="POST">
        <br><label for="cno" id="lab">Certificate No.</label>
        <input type="text" name="cno" id="cno">
        <input type="submit" id="bt" value="verify" name="submit">
        </form>
    </div>
    
</body>
</html>