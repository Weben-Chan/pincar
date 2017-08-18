<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>坐上拼车了</title>
</head>

<body>
<?php
$info_id = $_GET['info_id'];
$psg_name= $_GET['psg_name'];
require_once  'sqlconfig.php';
$con =connectdb();
$dri_result = mysqli_query($con,"SELECT * FROM `seatsinfo` WHERE info_id=$info_id");
$dri_arr = mysqli_fetch_array($dri_result,MYSQLI_ASSOC);
$dri_name = $dri_arr['name'];
$dri_seatsleft = $dri_arr['seatsleft']-1;

$niceo = 0;
//更改座位数
mysqli_query($con,"UPDATE seatsinfo SET `seatsleft`=$dri_seatsleft WHERE info_id=$info_id");

$psg_result = mysqli_query($con,"SELECT * FROM `user` WHERE name='$psg_name'");
$psg_arr = mysqli_fetch_array($psg_result,MYSQLI_ASSOC);
$psg_id = $psg_arr['id'];

mysqli_query($con,"INSERT INTO pin_rec (info_id,dri,psg_id,psg) VALUES('$info_id','$dri_name','$psg_id','$psg_name')");

$this_que = mysqli_query($con,"SELECT * FROM `pin_rec` WHERE info_id='$info_id' and psg_id='$psg_id'");
$this_arr = mysqli_fetch_array($this_que,MYSQLI_ASSOC);
$rec_id = $this_arr['rec_id'];

header("Location:../examples/schedule.php?id=$psg_id");
?>

<form action="pincar_server.php" method="get">
    <input type="hidden" name="niceo" value="<?php echo $niceo;?>">
    <input type="checkbox" name="niceo" value="<?php echo $niceo+=1;?>">点个赞<br>
    <input type="hidden" name="rec_id" value="<?php echo $rec_id;?>">
    <input type="hidden" name="psg_id" value="<?php echo $psg_id;?>">
    <input type="submit" value="到达目的地">
</form>

</body>
</html>