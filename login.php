<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $mycon=mysqli_connect("localhost","root","","hubnet");
        if(isset ($_POST['signin'])){
            $n=$_POST['name'];
            $u=$_POST['user'];
            $p=$_POST['password'];
            $q="select * from admin where uid='$u' and password='$p'";
            $rec=mysqli_query($mycon,$q);
            if(mysqli_num_rows($rec)>0){
                header("Location: http://localhost/hubnet/admin.php");
                echo "login successful";
            }
            else{
                echo "login fail";
            }
        }
    ?>
</body>
</html>