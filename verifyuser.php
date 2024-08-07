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
        #certi{
            /* border: 2px solid rgb(128, 94, 0); */
            box-shadow: 2px 2px 10px orange;
            margin-top: 30px;
            width: 85%;
            height: 700px;
            position: relative;
            margin-left: 100px;
            background-color: bisque;
        }
        #certi #head{
            background-color: bisque;
            color: black;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            height: 50px;
            line-height: 50px;
            font-size: 40px;
            border-radius: 0px;
            position: absolute;
            width: 80%;
            margin-left: 220px;
        }
        #certi #color{
            border: 2px solid orange;
            background-color: rgb(225, 159, 36);
            display: inline-block;
            position: absolute;
            height: 700px;
            width: 200px;
        }
        #certi #color2{
            height: 700px;
            width: 5px;
            background-color: #ff0000;
            position: absolute;
            margin-left: 205px;
        }
        #hh{
            height: 4px;
            background-color: green;
            /* position: absolute; */
            width: 80%;
            margin-left: 220px;
        }
        .hr{
            /* margin: 10px; */
            height: 4px;
            background-color: green;
            /* position: absolute; */

        }
        #certi #img{
            margin-left: 890px;
            height: 160px;
            width: 160px;
            margin-top: 50px;
        }
        #certi #c{
            margin-left: 880px;
            font-size: 21px;
            margin-top: -22px;
        }
        #certi #head2{
            margin-left: 890px;
            margin-top: 8px;
            font-size: 18px;
            /* text-align: center; */
        }
        #certi #detail{
            /* border: 2px solid black; */
            margin-top: 50px;
            margin-left: 210px;
            height: 200px;
        }
        #certi #hub{
            margin-left: 100px;
            font-size: 21px;
        }
    </style>
</head>
<body>
<?php

$mycon=mysqli_connect("localhost","root","","hubnet");
if(isset($_POST['submit'])){
$cn=$_POST['cno'];
$q="select * from certificate where cno='$cn'";
$rec=mysqli_query($mycon,$q);
if(mysqli_num_rows($rec)>0){
    $data=mysqli_fetch_assoc($rec);
    // header("Location: http://localhost/hubnet/verifyuser.php");
    $s=$data['name'];
    $f=$data['fname'];
    $co=$data['course'];
    $se=$data['session'];
    $g=$data['grade'];
}
else{
    header("Location: http://localhost/hubnet/certificate.php");
    echo "certificate not found";
}
}
?>
<div id="menu">
        <a href="index.php">Home</a>
        <a href="course.php">Course</a>
        <a href="verify.php">Verify</a>
        <a href="signup.php">SignUp</a>
        <a href="contact.php">ContactUs</a>
        <a href="certificate.php">Certificate</a>
    </div>
    
    <div id="certi">
        <div id="color">

        </div>
        <div id="color2">

        </div>
        <h1 id="head">Hubnet Education</h1>
        <img src="hubnet.png" alt="" id="img">
        <h2 id="c">C E R T I F I C A T E</h2><hr id="hh">
        <div id="head2">
            <h3>iso : 9001:2015</h3>
            <h3>cn : QWT34/78H</h3>
            <h3 id="hcn" name="hcn">hcn :<?php
            echo $cn;
            ?> </h3>
        </div>
        <div id="detail">
            <hr style="height: 4px; background-color: green; width: 95%; margin-top: -30px; margin-left: 20px;"><br>
            <p style="margin-left: 50px; font-size: 25px; font-weight: 100em; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><?php
                echo $s;
            ?>[ name of father <?php
            echo $f;
            ?>[ course <?php 
            echo $co;
            ?>[ session <?php
            echo $se;
            ?>[ grade <?php
            echo $g;
            ?>]]]]</p>
            <br><hr style="height: 4px; background-color: green;  width: 95%; margin-left: 20px;">
            <h2 id="hub"><i>has successfully completed the requirement to be recognized as a <br>
            hubnet  certified</i></h2>
        </div>
        <div style="width: 120px; height: 120px; border: 2px solid blue; margin-left: 800px; margin-top: -100px; border-radius: 50%;">
            <div style="width: 85px; height: 85px; border: 2px solid blue; margin-top: 15px; margin-left: 15px; border-radius: 50%;"></div>
        </div>
        <div id="p">
            <i><p style="margin-left: 900px; margin-top: 20px; font-size: 21px; font-weight: bold;">managing director</p></i>
        </div>
    </div>

</body>
</html>