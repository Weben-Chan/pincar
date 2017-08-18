<?php
$niceo = $_GET['niceo'];
$rec_id = $_GET['rec_id'];
$psg_id = $_GET['psg_id'];

require_once 'sqlconfig.php';
$con = connectdb();
mysqli_query($con,"UPDATE pin_rec SET `niceo`=$niceo,`finish`=1  WHERE `rec_id`=$rec_id");

if(mysqli_errno()){
    echo mysqli_error();
}else{
    header("Location:../examples/my_car.php?id=$psg_id");
}