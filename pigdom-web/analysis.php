<?php include("../db_connect.php"); ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <title>PIGDOM - WEB -</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Icons Fonts -->
    <link rel="stylesheet" href="icons-fonts/glyphicon-style.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main styles CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
	<!-- Sidebar -->
	<div class="sidebar">
		<div class="logo">
			<img src="images/pigo.png">
		</div>
		<div class="sidebar-menu">
			<ul class="sidebar-menu list">
				<li><a href="history.php">歷程記錄</a></li>
				<li><a href="analysis.php">統計分析</a></li>
				<li><a href="account.php">帳號管理</a></li>
				<li><a href="index.php">回到首頁</a></li>
			</ul>
			<div class="sidebar-menu update">
				<p><i class="fa fa-clock-o"></i>&emsp;資料最後更新時間：</p>
				&emsp;2017/03/12 00:00:00
			</div>
		</div>
	</div>
	<!-- end sidebar -->

	<!-- analysis page -->
	<div class="analysis">
		<!-- condition title -->
		<div class="contition-title">分析條件：</div> <!-- end condition title -->
		
		<!-- condition tab content -->
		<ul class="tabs">
			<li class="active" rel="tab1">帳號</li>
			<li rel="tab2">遊戲</li>
			<li rel="tab3">迷思概念</li>
		</ul>
		<div class="tab_container">

<?php
$perarray=array("100%", "90%", "80%", "70%", "60%", "50%", "40%", "30%", "20%", "10%", "0%");

// GET username data
$data_username = "SELECT username FROM user";
$usernamedata = mysqli_query($Link, $data_username);

?>			

			<!-- tab1: account -->
			<h3 class="d_active tab_drawer_heading" rel="tab1">帳號</h3>
			<div id="tab1" class="tab_content">
				<!-- condition select -->
				<div class="cond-select account">
					<div class="container">
						<div class="col-md-4">
							<form method="post" name="form1" action="">
							篩選條件：
							<select name="select1" class="selectbox">
								<option value="答對率">答對率</option>
								<option value="觀看補救教學比例">觀看補救教學比例</option>
							</select>
						</div>
						<div class="col-md-4">
							<input type="submit" name="Submit" value="生成圖表" class="btn btn-default filter" style="outline-color: #f2db63;">
						</div>
							</form>
					</div>
				</div> <!-- end condition select -->

				<!-- analysis chart -->
				<div class="cond-chart account">
					<div class="chart account">
						<ul class="chart-numbers account">
							<?php for ($i = 0; $i < count($perarray); $i++) { ?>
								<li><span><?php echo $perarray[$i]?></span></li>
							<?php } ?>
						</ul>
						<ul class="chart-bars account">
							<?php while ($userrow = mysqli_fetch_array($usernamedata)) { ?>
								<li><div data-percentage="56" class="bar"></div><span><?php echo $userrow[0] ?></span></li>
							<?php } ?>
						</ul>
					</div>
					<div class="y-axis-mark account">比例(%)</div>
					<div class="x-axis-mark account">學生帳號</div>
				</div> <!-- end analysis chart -->
			</div> <!-- end tab1: account -->

<?php
$gamearray=array("大家來解鎖", "大家來撈魚", "大家來蓋章", "大家來平衡", "大家來買糖");

?>
			
			<!-- tab2: game -->
			<h3 class="tab_drawer_heading" rel="tab2">遊戲</h3>
			<div id="tab2" class="tab_content">
				<div class="cond-select game">
					<div class="container">
						<div class="col-md-4">
							<form method="post" name="form2" action="">
							篩選條件：
							<select name="select2" class="selectbox">
								<option value="被遊玩次數">被遊玩次數</option>
								<option value="答題狀況">答題狀況</option>
							</select>
						</div>
						<div class="col-md-4">
							選擇遊戲：
							<select name="select3" class="selectbox">
								<?php for ($i = 0; $i < count($gamearray); $i++) { ?>
									<option value=<?php echo $gamearray[$i]?>><?php echo $gamearray[$i]?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col-md-4">
							<input type="submit" name="Submit" value="生成圖表" class="btn btn-default filter" style="outline-color: #f2db63;">
						</div>
							</form>
					</div>
				</div>

				<!-- analysis chart -->
				<div class="cond-chart game">
					<div class="chart game">
						<ul class="chart-numbers game">
							<?php for ($i = 0; $i < count($perarray); $i++) { ?>
								<li><span><?php echo $perarray[$i]?></span></li>
							<?php } ?>
						</ul>
						<ul class="chart-bars game">
							<?php for ($i = 0; $i < count($gamearray); $i++) { ?>
								<li><div data-percentage="56" class="bar"></div><span><?php echo $gamearray[$i]?></span></li>
							<?php } ?>
						</ul>
					</div>
					<div class="y-axis-mark game">比例(%)</div>
					<div class="x-axis-mark game">遊戲名稱</div>
				</div> <!-- end analysis chart -->
			</div> <!-- end tab2: game -->

<?php
$misarray=array("單純計算錯誤", "運算規則不熟悉", "應用問題列式能力不足", "擬題能力不足", "兩步驟問題的併式紀錄錯誤");

// GET username data
$data_username = "SELECT username FROM user";
$usernamedata = mysqli_query($Link, $data_username);

?>

			<!-- tab3: misconception -->
			<h3 class="tab_drawer_heading" rel="tab3">迷思概念</h3>
			<div id="tab3" class="tab_content">
				<div class="cond-select miscon">
					<div class="container">
						<div class="col-md-4">
							<form method="post" name="form3" action="">
							篩選條件：
							<select name="select4" class="selectbox">
								<?php for ($i = 0; $i < count($misarray); $i++) { ?>
									<option value=<?php echo $misarray[$i]?>><?php echo $misarray[$i]?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col-md-4">
							選擇帳號：
							<select name="select5" class="selectbox">
								<?php while ($userrow = mysqli_fetch_array($usernamedata)) { ?>
									<option value=<?php echo $userrow[0] ?>><?php echo $userrow[0] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col-md-4">
							<input type="submit" name="Submit" value="生成圖表" class="btn btn-default filter" style="outline-color: #f2db63;">
						</div>
							</form>
					</div>
				</div>

				<!-- analysis chart -->
				<div class="cond-chart miscon">
					<div class="chart miscon">
						<ul class="chart-numbers miscon">
							<?php for ($i = 0; $i < count($perarray); $i++) { ?>
								<li><span><?php echo $perarray[$i]?></span></li>
							<?php } ?>
						</ul>
						<ul class="chart-bars miscon">
							<?php for ($i = 0; $i < count($misarray); $i++) { ?>
								<li><div data-percentage="56" class="bar"></div><span><?php echo $misarray[$i]?></span></li>
							<?php } ?>
						</ul>
					</div>
					<div class="y-axis-mark miscon">比例(%)</div>
					<div class="x-axis-mark miscon">迷思概念</div>
				</div> <!-- end analysis chart -->
			</div> <!-- end tab3: misconception -->
		
		</div> <!-- end condition tab content -->


	</div>
	<!-- end analysis page -->


</body>

	<!-- ##### JAVASCRIPTS ##### -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Bootstrap js -->
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Index js -->
    <script type="text/javascript" src="js/index.js"></script>

</html>

<?php mysqli_close($Link); ?>