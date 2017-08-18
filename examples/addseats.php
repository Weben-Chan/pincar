<?php
$id = $_GET['id'];
require_once 'sqlconfig.php';
$conn =connectdb();

$result = mysqli_query($conn,"SELECT * FROM `user` WHERE id = '$id'");
$arr = mysqli_fetch_array($result,MYSQLI_ASSOC);
$dep = $arr['department'];
$name = $arr['name'];
$carnum = $arr['carnum'];
@date_default_timezone_set(PRC);
$date_now = date("Y-m-d");
$time_now = date("h:ia");
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

    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
    <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=6ae758c9143b97b5571fdb86615081bb&plugin=AMap.Autocomplete,AMap.PlaceSearch"></script>
    <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>

    <style>
        #container{
            height: 368px;
        }

        #containero{
            height: 368px;
        }
    </style>
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
					<li class="active">
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
	                                <h4 class="title">share空座位</h4>
	                                <p class="category">Fill in the blank.</p>
	                            </div>

                                <?php
                                    if($carnum==""){
                                        echo "<script>alert('亲，需要添加您的车辆信息才能发布空座位呢'); history.go(-1);</script>";
                                    }
                                ?>

                                                <form action="../carpool/addseats.php" method="post">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label" >工号</label>
                                                                <input type="text" name="id" value="<?php echo $id;?>" class="form-control" disabled>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">名字</label>
                                                                <input type="text" name="name" value="<?php echo $name;?>" class="form-control" disabled>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">部门</label>
                                                                <input type="text" name="department" value="<?php echo $dep;?>" class="form-control" disabled>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">车牌</label>
                                                                <input type="text" name="carnum" value="<?php echo $carnum;?>" class="form-control" disabled>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">日期</label>
                                                                <input type="text" name="date" value="<?php echo $date_now;?>" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">时间</label>
                                                                <input type="text" name="time" value="<?php echo $time_now;?>" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">座位数</label>
                                                                <input type="text" name="seats" class="form-control" >
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">起点</label>
                                                                <input type="text" id="tipinput" name="startaddr" class="form-control" >
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">终点</label>
                                                                <input type="text" id="tipinputo" name="finaladdr" class="form-control" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                                    <input type="hidden" name="name" value="<?php echo $name;?>">
                                                    <input type="hidden" name="department" value="<?php echo $dep;?>">
                                                    <input type="hidden" name="carnum" value="<?php echo $carnum;?>">
                                                    <div class="row">
                                                        <button type="submit" name="submit" class="btn btn-primary pull-right" style="margin: 5px 33px">拼起来</button>
                                                    </div>


                                                </form>

                                <div class="row">
                                    <div id="container" style="margin-top: 400px"></div>
                                </div>

			<p class="copyright pull-left" style="margin-left: 30px;">
				&copy; 2016 Esquel Group<a href="#">溢起拼车</a>, All Rights Reserved. Designed by GEK/PE.<a href="http://www.esquel.com/en/" target="_blank" title="溢达">溢达</a>
			</p>
	    </div>
	</div>

                        <script type="text/javascript">
							//地图加载
							var map = new AMap.Map("container", {
								resizeEnable: true
							});
							//输入提示
							var autoOptions = {
								input: "tipinput"
							};
							var auto = new AMap.Autocomplete(autoOptions);
							var placeSearch = new AMap.PlaceSearch({
								map: map
							});  //构造地点查询类
							AMap.event.addListener(auto, "select", select);//注册监听，当选中某条记录时会触发
							function select(e) {
								placeSearch.setCity(e.poi.adcode);
								placeSearch.search(e.poi.name);  //关键字查询查询
							}
                        </script>

                        <script type="text/javascript">
							//地图加载
							var mapo = new AMap.Map("containero", {
								resizeEnable: true
							});
							//输入提示
							var autoOptionso = {
								input: "tipinputo"
							};
							var autoo = new AMap.Autocomplete(autoOptionso);
							var placeSearcho = new AMap.PlaceSearch({
								map: mapo
							});  //构造地点查询类
							AMap.event.addListener(autoo, "select", select);//注册监听，当选中某条记录时会触发
							function select(e) {
								placeSearcho.setCity(e.poi.adcode);
								placeSearcho.search(e.poi.name);  //关键字查询查询
							}
                        </script>
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
