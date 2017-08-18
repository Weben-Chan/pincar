<?php
    if($_GET['id']==""){
        die('找不到工号');
    }
    $id = $_GET['id'];
    require_once 'sqlconfig.php';
    $conn = connectdb();
    $pin_result = mysqli_query($conn,"SELECT * FROM pin_rec WHERE psg_id='$id' ");
    $pin_count = mysqli_num_rows($pin_result);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>溢起拼车web体验版</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

<div class="wrapper">

	<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
		<!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
        -->

		<div class="logo">
			<a href="user.php?id=<?php echo $id;?>" class="simple-text">
				菜单
			</a>
		</div>


	    	<div class="sidebar-wrapper">
				<ul class="nav">
					<li>
						<a href="user.php?id=<?php echo $id;?>">
							<i class="material-icons">person</i>
							<p>个人主页</p>
						</a>
					</li>
					<li >
						<a href="allseats.php?id=<?php echo $id;?>">
							<i class="material-icons">dashboard</i>
							<p>墙上空座位</p>
						</a>
					</li>
					<li>
						<a href="addseats.php?id=<?php echo $id;?>">
							<i class="material-icons">group_add</i>
							<p>发布空座位</p>
						</a>
					</li>
					<li class="active">
						<a href="my_car.php?id=<?php echo $id;?>">
							<i class="material-icons">airport_shuttle</i>
							<p>我坐过的车</p>
						</a>
					</li>

					<li>
						<a href="seats_supply.php?id=<?php echo $id;?>">
							<i class="material-icons">weekend</i>
							<p>我发布的空座位</p>
						</a>
					</li>
					<li>
						<a href="maps.php?id=<?php echo $id;?>">
							<i class="material-icons">location_on</i>
							<p>地图</p>
						</a>
					</li>
					<li>
						<a href="schedule.php?id=<?php echo $id;?>">
							<i class="material-icons text-gray">notifications</i>
							<p>我的行程</p>
						</a>
					</li>
					<li class="active-pro">
						<a href="down_app.php?id=<?php echo $id;?>">
							<i class="material-icons">vertical_align_bottom</i>
							<p>下载溢起拼车</p>
						</a>
					</li>
	            </ul>
	    	</div>
		</div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Carpool</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">墙上的空座位</p>
								</a>
							</li>
							<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">4</span>
                                    <p class="hidden-lg hidden-md">新消息</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="seats_supply.php?id=<?php echo $id;?>">林峰搭乘了你的空座位</a></li>
                                    <li><a href="seats_supply.php?id=<?php echo $id;?>">黎秋水搭乘了你的空座位</a></li>
                                    <li><a href="seats_supply.php?id=<?php echo $id;?>">Bob搭乘了你的空座位</a></li>
                                    <li><a href="seats_supply.php?id=<?php echo $id;?>">林峰赞了你的空座位</a></li>
                                </ul>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">个人中心</p>
	 						   </a>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
	                        	<input type="text" class="form-control" placeholder="Search">
	                        	<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
	                    </form>
					</div>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">我坐过的车</h4>
	                                <p class="category">Here are the seats i was ever on.</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
                                            <th>累计</th>
                                            <th>日期</th>
                                            <th>时间</th>
                                            <th>司机</th>
                                            <th>车牌</th>
                                            <th>起点</th>
                                            <th>终点</th>
	                                    </thead>

	                                    <tbody>
                                        <?php
                                            for($i=1;$i<=$pin_count;$i++) {
                                                $pin_arr = mysqli_fetch_array($pin_result,MYSQLI_ASSOC);
                                                $info_id = $pin_arr['info_id'];
                                                $line_result = mysqli_query($conn,"SELECT * FROM seatsinfo WHERE info_id='$info_id' ORDER BY date DESC");
                                                $line_arr = mysqli_fetch_array($line_result,MYSQLI_ASSOC);
                                        ?>
	                                        <tr>
	                                        	<td><?php echo $i;?></td>
	                                        	<td><?php echo $line_arr['date'];?></td>
	                                        	<td><?php echo $line_arr['time'];?></td>
                                                <td><?php echo $line_arr['name'];?></td>
                                                <td><?php echo $line_arr['carnum'];?></td>
                                                <td><?php echo $line_arr['startaddr'];?></td>
                                                <td><?php echo $line_arr['finaladdr'];?></td>
	                                        </tr>
                                        <?php
                                        }
                                        ?>

	                                    </tbody>
	                                </table>




	    </div>
	</div>

                            <p class="copyright pull-left" style="margin-left: 30px;">
                                &copy; 2016 Esquel Group<a href="#">溢起拼车</a>, All Rights Reserved. Designed by GEK/PE.<a href="http://www.esquel.com/en/" target="_blank" title="溢达">溢达</a>
                            </p>
</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>
