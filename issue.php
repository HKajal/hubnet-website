<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: cornsilk;
        }
        img{
            margin-left: 60px;
            height: 110px;
        }
        #navi{
            /* border: 2px solid black; */
            height: 100px;
            width: 100%;
            background-color: rgb(4, 160, 17);
            box-shadow: 5px 5px 20px rgb(4, 160, 17);
            display: flex;
        }
        #navi #ull{
            margin-left: 170px;
            display: flex;
        }
        #navi #ull .list{
            /* border: 2px solid black; */
            display: flex;
            position: relative;
            margin: 30px;
            font-size: 28px;
            font-weight: bold;
            position: flex;
            text-transform: capitalize;
            justify-content: space-evenly;
            margin-top: 10px;
        }
        #navi #ull .list .anchor{
           text-decoration: none;
           margin: 20px;
           color: rgb(31, 11, 97);
        }
        #ul5{
            margin-top: 60px;
            margin-left: -120px;
            list-style: none;
            border-radius: 10px;
            /* border: 2px solid yellow; */
            background-color: black;
            height: 165px;
            box-shadow: 5px 5px 10px;
            display: none;
        }
        #ul5 .emp{
            width: 150px;
            text-align: center;
            /* height: 40px; */
            border-radius: 20px;
            margin: 7px;
        }
        #ul5 .emplo{
            text-decoration: none;
            font-size: 22px;
            font-weight: bold;
            color: rgb(4, 0, 255);
        }
        #navi #ull #l5:hover #ul5{
            display: block;
        }
        #ul5 .emp:hover .emplo{
            font-style: italic;
            color: aliceblue;
            /* text-decoration: underline solid red; */
        }
        #ul2{
            margin-top: 60px;
            margin-left: -120px;
            list-style: none;
            border-radius: 10px;
            /* border: 2px solid yellow; */
            background-color: black;
            height: 165px;
            box-shadow: 5px 5px 10px blue;
            display: none;
            transition-property: all space 0.5s;
        }
        #ul2 .emp{
            width: 150px;
            text-align: center;
            /* height: 40px; */
            border-radius: 20px;
            margin: 7px;
        }
        #ul2 .emplo{
            text-decoration: none;
            font-size: 22px;
            font-weight: bold;
            color: rgb(4, 0, 255);
        }
        #navi #ull #l2:hover #ul2{
            display: block;
        }
        #ul2 .emp:hover .emplo{
            font-style: italic;
            color: aliceblue;
            /* text-decoration: underline solid red; */
        }
        #ul3{
            margin-top: 60px;
            margin-left: -120px;
            list-style: none;
            border-radius: 10px;
            /* border: 2px solid yellow; */
            background-color: black;
            height: 165px;
            box-shadow: 5px 5px 10px;
            display: none;
            transition-property: all space 0.5s;
        }
        #ul3 .emp{
            width: 150px;
            text-align: center;
            /* height: 40px; */
            border-radius: 20px;
            margin: 7px;
        }
        #ul3 .emplo{
            text-decoration: none;
            font-size: 22px;
            font-weight: bold;
            color: rgb(4, 0, 255);
        }
        #navi #ull #l3:hover #ul3{
            display: block;
        }
        #ul3 .emp:hover .emplo{
            font-style: italic;
            color: aliceblue;
            /* text-decoration: underline solid red; */
        } 
        #ul4{
            margin-top: 60px;
            margin-left: -120px;
            list-style: none;
            border-radius: 10px;
            /* border: 2px solid yellow; */
            background-color: black;
            height: 165px;
            box-shadow: 5px 5px 10px;
            display: none;
            transition-property: all space 0.5s;
        }
        #ul4 .emp{
            width: 150px;
            text-align: center;
            /* height: 40px; */
            border-radius: 20px;
            margin: 7px;
        }
        #ul4 .emplo{
            text-decoration: none;
            font-size: 22px;
            font-weight: bold;
            color: rgb(4, 0, 255);
        }
        #navi #ull #l4:hover #ul4{
            display: block;
        }
        #ul4 .emp:hover .emplo{
            font-style: italic;
            color: aliceblue;
            /* text-decoration: underline solid red; */
        } 
        #issueform{
            /* border: 0.25px solid black; */
            height: 550px;
            width: 650px;
            margin-top: 60px;
            margin-left: 360px;
            border-radius: 20px;
            box-shadow: 2px 2px 18px lightblue;
        }
        .isu{
            margin-left: 90px;
            font-size: 25px;
        }
        .islab{
            height: 28px;
            width: 260px;
            margin-top: 25px;
            font-size: 20px;
            text-align: center;
            text-transform: capitalize;
        }
        #cno{
            margin-left: 175px; 
        }
        #name{
            margin-left: 100px;
        }
        #fname{
            margin-left: 98px;
        }
        #course{
            margin-left: 170px;
        }
        #session{
            margin-left: 166px;
        }
        #grade{
            margin-left: 180px;
        }
        hr{
            width: 90%;
            margin-left: 30px;
            height: 3px;
            background-color: blue;
        }
        h1{
            font-size: 38px;
        }
        #btn{
            height: 40px;
            width: 90%;
            background-color: blue;
            font-size: 22px;
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            border-radius: 10px;
            margin-left: 30px;
            margin-top: 70px;
        }
    </style>
</head>
<body>
   <!-- <div id="container"> -->
    <nav id="navi">
    <img src="hubnet.png" alt="">
        <ul id="ull">
            <li class="list" id="l1"><a href="index.php" class="anchor" id="a1">home</a></li>
            <li class="list" id="l2"><a href="" class="anchor" id="a2">course</a>
                <ul id="ul2">
                    <li class="emp" id="em1"><a href="http://localhost/hubnet/addcourse.php" class="emplo" id="enew">Add</a></li>
                    <li class="emp" id="em2"><a href="http://localhost/hubnet/modifyc.php" class="emplo" id="eud">Modify</a></li>
                    <li class="emp" id="em3"><a href="http://localhost/hubnet/deletec.php" class="emplo" id="edel">Delete</a></li>
                    <li class="emp" id="em4"><a href="http://localhost/hubnet/findc.php" class="emplo" id="efd">Find</a></li>
                </ul>
            </li>
            <li class="list" id="l3"><a href="" class="anchor" id="a3">student</a>
                <ul id="ul3">
                    <li class="emp" id="em1"><a href="http://localhost/hubnet/news.php" class="emplo" id="enew">Add</a></li>
                    <li class="emp" id="em2"><a href="http://localhost/hubnet/updates.php" class="emplo" id="eud">modify</a></li>
                    <li class="emp" id="em3"><a href="http://localhost/hubnet/deletes.php" class="emplo" id="edel">delete</a></li>
                    <li class="emp" id="em4"><a href="http://localhost/hubnet/verifys.php" class="emplo" id="efd">verify</a></li>
                </ul>
            </li>
            <li class="list" id="l4"><a href="" class="anchor" id="a4">certificate</a>
                <ul id="ul4">
                    <li class="emp" id="em1"><a href="" class="emplo" id="enew">issue</a></li>
                    <li class="emp" id="em2"><a href="" class="emplo" id="eud">revoke</a></li>
                    <li class="emp" id="em3"><a href="" class="emplo" id="edel">update</a></li>
                    <li class="emp" id="em4"><a href="" class="emplo" id="efd">verify</a></li>
                </ul>
            </li>
            <li class="list" id="l5"><a href="" class="anchor" id="a5">employee</a>
                <ul id="ul5">
                    <li class="emp" id="em1"><a href="http://localhost/hubnet/enew.php" class="emplo" id="enew">new</a></li>
                    <li class="emp" id="em2"><a href="http://localhost/hubnet/eupdate.php" class="emplo" id="eud">update</a></li>
                    <li class="emp" id="em3"><a href="http://localhost/hubnet/edel.php" class="emplo" id="edel">delete</a></li>
                    <li class="emp" id="em4"><a href="http://localhost/hubnet/efind.php" class="emplo" id="efd">find</a></li>
                </ul>
            </li>
        </ul>
    </nav>
   <!-- </div> -->

   <form action="#" method="POST" id="issueform">
    <div id="issue">
        <center><h1>Issue Certificate</h1></center><hr>
        <label for="cno" id="is1" class="isu">Cr No.</label>
        <input type="text" name="cno" id="cno" class="islab"><br>
        <label for="name" id="is2" class="isu">Student Name</label>
        <input type="text" name="name" id="name" class="islab"><br>
        <label for="fname" id="is3" class="isu">Father's Name</label>
        <input type="text" name="fname" id="fname" class="islab"><br>
        <label for="course" id="is4" class="isu">Course</label>
        <input type="text" name="course" id="course" class="islab"><br>
        <label for="session" id="is5" class="isu">Session</label>
        <input type="text" name="session" id="session" class="islab"><br>
        <label for="grade" id="is6" class="isu">Grade</label>
        <input type="text" name="grade" id="grade" class="islab"><br>
        <input type="submit" name="issue" id="btn" value="issue">
    </div>
   </form>
   <?php
    $mycon=mysqli_connect("localhost","root","","hubnet");
    if(isset($_POST['issue'])){
        $cn=$_POST['cno'];
        $sn=$_POST['name'];
        $fn=$_POST['fname'];
        $co=$_POST['course'];
        $se=$_POST['session'];
        $gr=$_POST['grade'];
        $q="insert into certificate values('$cn','$sn','$fn','$co','$se','$gr')";
        mysqli_query($mycon,$q);
    }
?>   
</body>
</html>