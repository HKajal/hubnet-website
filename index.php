<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <?php
        // include('signup.php');
        include('login.php');
    ?>
</head>
<body>
    <div id="menu">
        <a href="index.php">Home</a>
        <a href="course.php">Course</a>
        <a href="verify.php">Verify</a>
        <a href="signup.php">SignUp</a>
        <a href="contact.php">ContactUs</a>
        <a href="certificate.php">Certificate</a>
        <button id="lockbtn"><i class="fa fa-solid fa-lock"></i></button>
    </div>
    <span onclick="fclose()">&times;</span>
    <form action="" method="POST" id="for">
        <h1>Login</h1><hr>
        <tr>
            <label for="name" id="l1" class="lab">Name</label>
            <input type="text" id="name" class="int" name="name"><br><br>
        </tr>
        <tr>
            <label for="user" id="l2" class="lab">UserId</label>
            <input type="text" id="user" class="int" name="user"><br><br>
        </tr>
        <tr>
            <label for="txt2" id="l3" class="lab">Password</label> 
            <input type="password" id="password" class="int" name="password"><br><br><br>
        </tr>
            <!-- <input type="submit" id="signup" class="btn" name="signup" value="signup"> -->
            <input type="submit" id="cancle" class="btn" name="cancle" value="cancle">
            <input type="submit" id="sgnin" class="btn" name="signin" value="signin">

    </form>
</body>
</html>