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
            background-image: url(bilge-tekin-GiATUqz4NYY-unsplash.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        img{
            margin-left: 60px;
            height: 110px;
        }
        #navi{
            border: 2px solid black;
            height: 100px;
            width: 100%;
            background-color: rgb(4, 160, 17);
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
        #for{
            /* border: 2px solid black; */
            /* text-align: center; */
            height: 350px;
            width: 500px;
            margin-left: 430px;
            margin-top: 100px;
            /* margin: 10px; */
            border-radius: 20px;
            background-color: rgba(235, 243, 246, 0.501);
        }
        .lab{
            margin-left: 30px;
            font-size: 20px;
        }
        .th{
            font-size: 16px;
        }
        #sid{
            margin-left: 120px;
        }
        #name{
            margin-left: 154px;
        }
        #phone{
            margin-left: 105px;
        }
        #dob{
            margin-left: 97px;
        }
        #doa{
            margin-left: 43px;
        }
        #course{
            margin-left: 147px;
        }
        #l7{
            margin-left: 120px;
        }
        #submit{
            margin-left: 225px;
            margin-top: 100px;
            height: 28px;
            width: 80px;
            border-radius: 10px;
            background-color: darkorchid;
        }
    </style>
</head>
<body>  
    <nav id="navi">
    <img src="hubnet.png" alt="">
        <ul id="ull">
            <li class="list" id="l1"><a href="" class="anchor" id="a1">home</a></li>
            <li class="list" id="l2"><a href="" class="anchor" id="a2">course</a>
                <ul id="ul2">
                    <li class="emp" id="em1"><a href="http://localhost/hubnet/addcourse.php" class="emplo" id="enew">Add</a></li>
                    <li class="emp" id="em2"><a href="" class="emplo" id="eud">Modify</a></li>
                    <li class="emp" id="em3"><a href="" class="emplo" id="edel">Delete</a></li>
                    <li class="emp" id="em4"><a href="" class="emplo" id="efd">Find</a></li>
                </ul>
            </li>
            <li class="list" id="l3"><a href="" class="anchor" id="a3">student</a>
                <ul id="ul3">
                    <li class="emp" id="em1"><a href="http://localhost/hubnet/news.php" class="emplo" id="enew">new</a></li>
                    <li class="emp" id="em2"><a href="http://localhost/hubnet/updates.php" class="emplo" id="eud">modify</a></li>
                    <li class="emp" id="em3"><a href="http://localhost/hubnet/deletes.php" class="emplo" id="edel">delete</a></li>
                    <li class="emp" id="em4"><a href="http://localhost/hubnet/verifys.php" class="emplo" id="efd">verify</a></li>
                </ul>
            </li>
            <li class="list" id="l4"><a href="" class="anchor" id="a4">certificate</a>
                <ul id="ul4">
                    <li class="emp" id="em1"><a href="http://localhost/hubnet/certi.php" class="emplo" id="enew">new</a></li>
                    <li class="emp" id="em2"><a href="http://localhost/hubnet/cupdate.php" class="emplo" id="eud">update</a></li>
                    <li class="emp" id="em3"><a href="http://localhost/hubnet/cdel.php" class="emplo" id="edel">delete</a></li>
                    <li class="emp" id="em4"><a href="http://localhost/hubnet/cfind.php" class="emplo" id="efd">find</a></li>
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
    <?php
            $mycon=mysqli_connect("localhost","root","","hubnet");
            if(isset($_POST['submit'])){
                $id=$_POST['sid'];
                $na=$_POST['name'];
                $ph=$_POST['phone'];
                $db=$_POST['dob'];
                $da=$_POST['doa'];
                $co=$_POST['course'];
                $name=$_FILES['photo']['name'];
                $size=$_FILES['photo']['size'];
                $tnam=$_FILES['photo']['tmp_name'];
                $typ=$_FILES['photo']['type'];
                $path="./pic/" .$name;
                move_uploaded_file($tnam,$path);
                $q="insert into student values('$id','$na','$ph','$db','$da','$co','$name')";
                mysqli_query($mycon,$q);
            }
        ?>
        <form action="" method="POST" id="for" enctype="multipart/form-data">
            <center><h1>ADD NEW STUDENT</h1><hr></center>
            <tr>
                <th><label for="" class="lab" id="l1">Student Id</label></th>
                <th><input type="text" name="sid" id="sid" class="th" placeholder="enter student id...."></th><br>
            </tr>
            <tr>
                <th><label for="" class="lab" id="l2">Name</label></th>
                <th><input type="text" name="name" id="name" class="th" placeholder="enter name...."></th><br>
            </tr>
            <tr>
                <th><label for="" class="lab" id="l3">Contact No.</label></th>
                <th><input type="text" name="phone" id="phone" class="th" placeholder="enter phone no...."></th><br>
            </tr>
            <tr>
                <th><label for="" class="lab" id="l4">Date of Birth</label></th>
                <th><input type="text" name="dob" id="dob" class="th" placeholder="enter dob...."></th><br>
            </tr>
            <tr>
                <th><label for="" class="lab" id="l5">Date of Addmission</label></th>
                <th><input type="text" name="doa" id="doa" class="th" placeholder="enter date...."></th><br>
            </tr>
            <tr>
                <th><label for="" class="lab" id="l6">Course</label></th>
                <th><input type="text" name="course" id="course" class="th" placeholder="enter course...."></th><br>
            </tr>
            <tr>
                <th><label for="" class="lab" id="l7">Photo</label></th>
                <th><input type="file" name="photo" id="photo" class="th"></th><br>
            </tr>
            <tr>
                <input type="submit" name="submit" value="Add" id="submit" class="th">
            </tr>
        </form>
        
</body>
//post is global variable
</html>