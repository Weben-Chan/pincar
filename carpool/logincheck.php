<?php
if(!isset($_POST['id'])){
    die('工号未提交');
}
if(!isset($_POST['passwd'])){
    die('密码未提交');
}
$id = $_POST['id'];
$psw = $_POST['passwd'];
if($id=="" || $psw==""){
    echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
}else{
    require_once 'sqlconfig.php';
    $con = connectdb();

    $result = mysqli_query($con,"SELECT id,passwd FROM `user` WHERE id = '$id' and passwd = '$psw'");

    $data_count = mysqli_num_rows($result);
    if($data_count>0){
        $user_arr = mysqli_fetch_array($result,MYSQLI_ASSOC);
        print_r($user_arr);
        header("Location: ../examples/user.php?id=$id");


    }else{
        echo "<script>alert('用户名或密码错误！'); history.go(-1);</script>";
    }
}
