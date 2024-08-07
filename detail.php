<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="stv">Student Verification</h1><hr>
<?php
        $mycon=mysqli_connect("localhost","root","","hubnet");
        $r=$_POST['reg'];
        $c=$_POST['contact'];
        // $p=$_FILES['photo'];
        $q="select * from student where sid='$r' or contact='$c'";
        $rec=mysqli_query($mycon,$q);
        if(mysqli_num_rows($rec)>0){
            $data=mysqli_fetch_assoc($rec);     //to take single value
                ?>
                <table id="tab">
                    <tr id="tr">
                        <td id="td1" class="td"><?php echo $data['sid'];?></td>
                        <td id="td2" class="td"><?php echo $data['name'];?></td>
                        <td id="td3" class="td"><?php echo $data['contact'];?></td>
                        <td id="td4" class="td"><?php echo $data['dob'];?></td>
                        <td id="td5" class="td"><?php echo $data['doa'];?></td>
                        <td id="td6" class="td"><?php echo $data['course'];?></td>
                        <td id="td7" class="td"><img src="<?php echo "./pic/".$data['pics'];?>" style="height:90px;" alt=""></td>
                    </tr>
                </table>
                <?php
        }
?>
</body>
</html>