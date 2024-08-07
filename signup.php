<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body{
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url(pexels-pixabay-206359.jpg)no-repeat;
            background-position: center;
            background-size: cover;
            border-radius: 40px;
        }
        #container{
            width: 400px;
            height: 500px;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            border: 3px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 30px wheat;
            border-radius: 40px;
        }
        h2{
            text-transform: uppercase;
            padding: 20px 0;
            font-size: 2em;
            text-align: center;
            color: wheat;
        }
        #form{
            width: 350px;
            margin: 30px 0;
            /* background-color: aqua; */
            position: relative;
            border-bottom: 3px solid wheat;
        }
        #form input{
            width: 100%;
            height: 50px;
            background:transparent;
            border: none;
            outline: none;
            font-size: 21px;
            color: wheat;
            padding: 0 30px 0 10px;
        }
        #form label{
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            font-size: 21px;
            color: wheat;
        }

        /* input:focus ~ label,
        input:valid ~ label
        {
            top: -5px;
        } */

        #form i{
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            color: wheat;
            font-size: 21px;
        }
        p{
            text-align: center;
            color: wheat;
            padding: 10px 0;
        }
        #submit{
            width: 100%;
            height: 50px;
            border-radius: 40px;
            border: none;
            font-size: 30px;
            font-weight: bold;
            text-transform: capitalize;
            margin: 10px 0;
            transition: 0.5s;
        }
        #submit:hover{
            background: rgba(0,0,0, 0.3);
            color: wheat;
            cursor: pointer;
        }
    </style>
</head>
<body>
<!-- <div id="menu">
        <a href="index.php">Home</a>
        <a href="course.php">Course</a>
        <a href="verify.php">Verify</a>
        <a href="signup.php">SignUp</a>
        <a href="contact.php">ContactUs</a>
        <a href="certificate.php">Certificate</a>
    </div> -->
    <div id="container">
        <h2>SignUp</h2>
        <form action="">
            <div id="form">
                <input type="text" name="name" id="name" class="int" placeholder="name" required>
                <!-- <label for="name">name</label> -->
                <i class="fa-solid fa-signature"></i>
            </div>
            <div id="form">
                <input type="text" name="user" id="user" class="int" placeholder="Email Id" required>
                <!-- <label for="user">User id</label> -->
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div id="form">
                <input type="password" name="password" id="password" class="int" placeholder="set password" required>
                <!-- <label for="setpas">Set Password</label> -->
                <i class="fa-solid fa-lock"></i>
            </div>
            <p><input type="checkbox">Remember Me</p>
            <input type="submit" value="submit" id="submit">
        </form>
    </div>

<?php
    $mycon=mysqli_connect("localhost","root","","hubnet");
    if(isset($_POST['submit'])){
        $n=$_POST['name'];
        $u=$_POST['user'];
        $p=$_POST['password'];
        $q="insert into users values('$n','$u','$p')";
        mysqli_query($mycon,$q);
        }
?>
</body>
</html>