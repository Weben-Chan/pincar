<?php

if(empty($_GET['info_id'])){
    die('查询不到流水号');
}

require_once 'sqlconfig.php';
$conn = connectdb();

//删除座位
$info_id = $_GET['info_id'];
$id = findid($info_id);
echo $info_id;
$result = mysqli_query($conn,"DELETE FROM `seatsinfo` WHERE `seatsinfo`.`info_id` = $info_id");
if(mysqli_errno($conn)){
    die("Failed to delete info with info_id $info_id");
}else{
    header("Location:../examples/seats_supply.php?id=$id");
}