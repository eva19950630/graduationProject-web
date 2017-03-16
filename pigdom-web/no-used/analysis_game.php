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
				<li><a href="analysis_account.php">統計分析</a></li>
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
			<a href="analysis_account.php"><li rel="tab1">帳號</li></a>
			<a href="analysis_game.php"><li class="active" rel="tab2">遊戲</li></a>
			<a href="analysis_misconception.php"><li rel="tab3">迷思概念</li></a>
		</ul>
		<div class="tab_container">

<?php
$perarray=array("100%", "90%", "80%", "70%", "60%", "50%", "40%", "30%", "20%", "10%", "0%");
$gamearray=array("大家來解鎖", "大家來撈魚", "大家來蓋章", "大家來平衡", "大家來買糖");

if ($_POST) {
	echo $_POST['select2'];
	$game_selectcond = $_POST['select2'];
} else {
	echo "被遊玩比例";
	$game_selectcond = "被遊玩比例";
}
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
								<?php $game_cond_array=array("被遊玩比例", "被回答錯誤比例"); 
								for ($i = 0; $i < count($game_cond_array); $i++) { ?>
									<?php if($game_cond_array[$i] == $game_selectcond) : ?>
										<option value=<?php echo $game_cond_array[$i]?> selected><?php echo $game_cond_array[$i] ?></option>
									<?php else : ?>
										<option value=<?php echo $game_cond_array[$i]?>><?php echo $game_cond_array[$i] ?></option>
									<?php endif; ?>
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
							<?php for ($i = 0; $i < count($gamearray); $i++) { 

								// GET game data record
								$data_gamerecord = "SELECT * FROM game_record";
								$recorddata = mysqli_query($Link, $data_gamerecord);

								$recordcount = 0;
								
								while ($row = mysqli_fetch_array($recorddata)) {
									$recordcount++;
								}

							?>
								<li><div data-percentage=<?php echo $recordcount ?> class="bar"></div><span><?php echo $gamearray[$i]?></span></li>
							<?php } ?>
						</ul>
					</div>
					<div class="y-axis-mark game">比例(%)</div>
					<div class="x-axis-mark game">遊戲名稱</div>
				</div> <!-- end analysis chart -->
			</div> <!-- end tab2: game -->

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