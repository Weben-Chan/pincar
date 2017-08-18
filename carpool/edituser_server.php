<?php
$id = intval($_POST['id']);
$name = $_POST['name'];
$department = $_POST['department'];
$carnum = $_POST['carnum'];
$psw = $_POST['psw'];
$freestyle = $_POST['freestyle'];

if($name==""){
    echo "<script>alert('名字不可为空！'); history.go(-1);</script>";
}
if($department==""){
    echo "<script>alert('部门不可为空！'); history.go(-1);</script>";
}
if($psw==""){
    echo "<script>alert('密码不可为空！'); history.go(-1);</script>";
}

echo $name;
require_once 'sqlconfig.php';
$conn =connectdb();
$name_result = mysqli_query($conn,"SELECT name FROM user WHERE id='$id'");
$name_arr = mysqli_fetch_array($name_result,MYSQLI_ASSOC);
$name_old = $name_arr['name'];
mysqli_query($conn,"UPDATE seatsinfo SET name='$name',department='$department',carnum='$carnum' WHERE name='$name_old'");

mysqli_query($conn,"UPDATE user SET passwd='$psw',name='$name',department='$department',carnum='$carnum',freestyle='$freestyle' WHERE id='$id'");
if(mysqli_errno()){
    echo mysqli_error();
}else{
    header("Location: ../examples/user.php?id=$id");
}