<?php
if($_GET['id']==""){
    die('找不到工号');
}
require_once 'sqlconfig.php';
$conn = connectdb();
$id = intval($_GET['id']);
$result = mysqli_query($conn,"SELECT * FROM user WHERE id='$id'");
$user_arr = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Material Dashboard by Creative Tim</title>

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
					<li>
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
					<li class="active-pro active">
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
						<a class="navbar-brand" href="#">JOIN US !</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="allseats.php?id=<?php echo $id;?>" class="dropdown-toggle">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">墙上空座位</p>
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
								<a href="user.php?id=<?php echo $id;?>" class="dropdown-toggle">
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
					<div class="bg-color">
						<div class="download section-padding">
							<div class="container">

								<div class="header">
									<h1>Download <strong>Carpool</strong> for your Phone</h1>
									<p>LOVE and SUPPORTEveryone is searching for love and support. Thank you for your love and support</p>

								</div> <!-- end .container > .header -->

								<div class="row download-area">

									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
										<a href="" class="btn btn-default custom-btn download-btn">
											<i class="fa fa-apple"></i>
											<div class="app-download">
												<span>Download on the</span><strong>App Store</strong>
											</div>
										</a>
									</div> <!-- end .download-area> .col-lg-3 (1) -->



									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
										<a href="http://d5.s836.cn/y12/yqxhy/yiqipche.apk" class="btn btn-default custom-btn download-btn">
											<i class="fa fa-android"></i>
											<div class="app-download">
												<span>Available for</span>Android Phone
											</div>
										</a>
									</div> <!-- end .download-area> .col-lg-3 (3) -->


								</div> <!-- end .container > .row/.download-area -->

							</div> <!-- end .container -->
						</div> <!-- end .download -->
					</div> <!-- end .bg-color -->
	            </div>
	        </div>


			<p class="copyright pull-left" style="margin-left: 30px;">
				&copy; 2016 Esquel Group<a href="#">溢起拼车</a>, All Rights Reserved. Designed by GEK/PE.<a href="http://www.esquel.com/en/" target="_blank" title="溢达">溢达</a>
			</p>
	    </div>
	</div>

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
