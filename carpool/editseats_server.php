<?php

$info_id = $_POST['info_id'];
$date = $_POST['date'];
$time = $_POST['time'];
$startaddr = $_POST['startaddr'];
$finaladdr = $_POST['finaladdr'];
$seats = $_POST['seats'];

if($date==""){
    die('date is empty');
}
if($time==""){
    die('time is empty');
}
if($startaddr==""){
    die('startaddr is empty');
}
if($finaladdr==""){
    die('finaladdr is empty');
}
if($seats==""){
    die('seats is empty');
}

require_once 'sqlconfig.php';
$conn =connectdb();
mysqli_query($conn,"UPDATE seatsinfo SET date='$date',time='$time',startaddr='$startaddr',finaladdr='$finaladdr',seats='$seats'WHERE info_id = '$info_id'");
$id = findid($info_id);

if(mysqli_errno()){
    echo mysqli_error();
}else{
    header("Location:../examples/seats_supply.php?id=$id");
}