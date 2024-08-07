<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #tab{
            margin-left: 550px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div id="menu">
        <a href="index.php">Home</a>
        <a href="course.php">Course</a>
        <a href="verify.php">Verify</a>
        <a href="signup.php">SignUp</a>
        <a href="contact.php">ContactUs</a>
        <a href="certificate.php">Certificate</a>
    </div>
    
    <div><h1>Our Courses</h1>
        <table border="1" id=tab>
            <tr>
                <!-- <th>SI</th> -->
                <th>COURSE</th>
                <th>DURATION</th>
                <th>FEE</th>
            </tr>
            <?php
                $mycon=mysqli_connect("localhost","root","","hubnet");
                $q="select * from course";
                $rec=mysqli_query($mycon,$q);
                if(mysqli_num_rows($rec)>0){
                    foreach($rec as $r){
                        ?>
                        <tr>
                            <td><a href="CourseDetail.php" style="text-decoration: none; font-size: 20px;"><?php echo $r['name'];?></a></td>
                            <td><?php echo $r['duration'];?></td>
                            <td><?php echo $r['fee'];?></td>
                        </tr>
                        <?php
                    }
                }
            ?>
        </table>
    </div>
</body>
</html>