<?php
function connectdb(){
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_set_charset($conn, "utf8");
    if ($conn) {
//        echo "connectdb successfully";
        mysqli_select_db($conn,'carpool_test');
    } else {
        die("connectdb failed");
    }
    echo "<br>";
    return $conn;
}

function findid($info_id){
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_set_charset($conn, "utf8");
    mysqli_select_db($conn,'carpool_test');
    $result = mysqli_query($conn,"SELECT * FROM `seatsinfo` WHERE info_id=$info_id");
    $long_arr = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $name = $long_arr['name'];

    $user_result = mysqli_query($conn,"SELECT * FROM `user` WHERE name='$name'");
    $user_arr = mysqli_fetch_array($user_result,MYSQLI_ASSOC);

    $id = $user_arr['id'];
    return $id;
}

function updnice($name){
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_set_charset($conn, "utf8");
    mysqli_select_db($conn,'carpool_test');
    $result = mysqli_query($conn,"SELECT * FROM `pin_rec` WHERE dri='$name' AND niceo=1 ");
    $nice_count = mysqli_num_rows($result);
    mysqli_query($conn,"UPDATE seatsinfo SET nice='$nice_count' WHERE name='$name'");
    return $nice_count;
}