<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>发布空座位</title>
</head>
<body>
<?php
$id = $_POST['id'];
require_once 'sqlconfig.php';
$conn =connectdb();

if(!isset($_POST['date'])){
    die('date is not defined');
}
if(!isset($_POST['time'])){
    die('time is not defined');
}
if(!isset($_POST['startaddr'])){
    die('startaddr is not defined');
}
if(!isset($_POST['finaladdr'])){
    die('finaladdr is not defined');
}
if(!isset($_POST['seats'])){
    die('seats is not defined');
}

$date = $_POST['date'];
$time = $_POST['time'];
$startaddr = $_POST['startaddr'];
$finaladdr = $_POST['finaladdr'];
$seats = $_POST['seats'];
$name = $_POST['name'];
$department = $_POST['department'];
$carnum = $_POST['carnum'];
$nice = updnice($name);

//if($date==""){
//    echo "<script>alert('拼车日期不可为空！'); history.go(-1);</script>";
//}
//if($time==""){
//    echo "<script>alert('拼车时间不可为空！'); history.go(-1);</script>";
//}
//if($startaddr==""){
//    echo "<script>alert('拼车起点不可为空！'); history.go(-1);</script>";
//}
//if($finaladdr==""){
//    echo "<script>alert('拼车终点不可为空！'); history.go(-1);</script>";
//}
//if($seats==""){
//    echo "<script>alert('拼车座位数不可为空！'); history.go(-1);</script>";
//}


if($date=="" || $time=="" || $startaddr=="" || $finaladdr=="" || $seats==""){
    echo "<script>alert('亲，请补全拼车信息哦'); history.go(-1);</script>";
}else {
	$sql = "INSERT INTO seatsinfo (name,department,carnum,date,time,startaddr,finaladdr,seatsleft,seats,nice) VALUES ('$name','$department','$carnum','$date','$time','$startaddr','$finaladdr','$seats','$seats','$nice')" ;

	mysqli_query($conn,$sql );
    header("Location:../examples/seats_supply.php?id=$id");
}
?>
</body>
</html>
