<?php
if(!isset($_POST['id'])){
    die('id is not submitted');
}
if(!isset($_POST['passwd'])){
    die('passwd is not submitted');
}
if(!isset($_POST['name'])){
    die('name is not submitted');
}
if(!isset($_POST['department'])){
    die('department is not submitted');
}
if(!isset($_POST['carnum'])){
    die('carnum is not submitted');
}


$id = $_POST["id"];
$psw = $_POST["passwd"];
$psw_confirm = $_POST["passwd_confirm"];
$name = $_POST['name'];
$dep = $_POST['department'];
$carnum = $_POST['carnum'];

if($id == "" || $psw == "" || $psw_confirm == "" || $name == "" || $dep == "")
{
    echo "<script>alert('部分信息不能为空！'); history.go(-1);</script>";
}
else
{
    if($psw <> $psw_confirm)
    {
        echo "<script>alert('密码不一致！'); history.go(-1);</script>";
    }
    else
    {
        require_once 'sqlconfig.php';
        $con = connectdb();
        $result = mysqli_query($con,"SELECT id FROM user WHERE id='$id'");
        $num = mysqli_num_rows($result);
        if($num)
        {
            echo "<script>alert('用户名已存在'); history.go(-1);</script>";
        }
        else
        {
            $result_insert = mysqli_query($con,"INSERT INTO user (id,passwd,name,department,carnum) VALUES ('$id','$psw','$name','$dep','$carnum')");
            if($result_insert)
            {
                echo "<script>alert('注册成功！'); history.go(-1);</script>";
                header("Location: showuserinfo.php?id=$id");
            }else
            {
                echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
            }
        }
    }
}