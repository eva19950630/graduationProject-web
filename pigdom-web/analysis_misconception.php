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
			<a href="analysis_misconception.php"><li class="active" rel="tab2">迷思概念</li></a>
		</ul>
		<div class="tab_container">

<?php
$perarray=array("100%", "90%", "80%", "70%", "60%", "50%", "40%", "30%", "20%", "10%", "0%");
$misarray=array("單純計算錯誤", "運算規則不熟悉", "應用問題列式能力不足", "擬題能力不足", "兩步驟問題的併式紀錄錯誤");
$gamearray=array("大家來解鎖", "大家來撈魚", "大家來蓋章", "大家來平衡", "大家來買糖");

// GET username data
$data_username = "SELECT username FROM user";
$usernamedata = mysqli_query($Link, $data_username);

if ($_POST) {
	// echo $_POST['select2'];
	$selectuser = $_POST['select2'];
} else {
	// echo "alluser";
	$selectuser = "alluser";
}

// GET game data record
if ($selectuser != "alluser")
	$data_gamerecord = "SELECT * FROM game_record where username = '$selectuser'";
else
	$data_gamerecord = "SELECT * FROM game_record";
$recorddata = mysqli_query($Link, $data_gamerecord);

?>

			<!-- tab2: misconception -->
			<h3 class="tab_drawer_heading" rel="tab2">迷思概念</h3>
			<div id="tab2" class="tab_content">
				<div class="cond-select miscon">
					<div class="container">
						<div class="col-md-4">
							<form method="post" name="form2" action="">
							選擇帳號：
							<select name="select2" class="selectbox">
									<option value="alluser">全部學生</option>
								<?php while ($userrow = mysqli_fetch_array($usernamedata)) { ?>
									<?php if($userrow[0] == $selectuser) : ?>
										<option value=<?php echo $userrow[0]?> selected><?php echo $userrow[0] ?></option>
									<?php else : ?>
										<option value=<?php echo $userrow[0]?>><?php echo $userrow[0] ?></option>
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
				<div class="cond-chart miscon">
					<div class="chart miscon">
						<ul class="chart-numbers miscon">
							<?php for ($i = 0; $i < count($perarray); $i++) { ?>
								<li><span><?php echo $perarray[$i]?></span></li>
							<?php } ?>
						</ul>
						<ul class="chart-bars miscon">
							<?php
							for ($i = 0; $i < 5; $i++) {
								$miscount[$i] = 0;
								$wronggamecount[$i] = 0;
								$gamecount[$i] = 0;
							}
							
							while ($row = mysqli_fetch_array($recorddata)) {
								for ($i = 0; $i < count($gamearray); $i++) {
									if ($row[1] == $gamearray[$i])
										$gamecount[$i]++;
								}
								if ($row[6] == "wrong") {
									switch ($row[1]) {
										case "大家來解鎖":
											$miscount[0]++;
											$miscount[1]++;
											$miscount[4]++;
											break;
										case "大家來撈魚":
											$miscount[2]++;
											$miscount[4]++;
											break;
										case "大家來蓋章":
											$miscount[0]++;
											$miscount[1]++;
											$miscount[4]++;
											break;
										case "大家來平衡":
											$miscount[0]++;
											$miscount[1]++;
											$miscount[4]++;
											break;
										case "大家來買糖":
											$miscount[3]++;
											$miscount[4]++;
											break;
									}
								}							
							}
							
							// calculate misconception rate
							if ($gamecount[0] == 0 && $gamecount[2] == 0 && $gamecount[3] == 0) {
								$misrate[0] = 0;
								$misrate[1] = 0;
							} else {
								$misrate[0] = round(($miscount[0]/($gamecount[0]+$gamecount[2]+$gamecount[3]))*100, 0);
								$misrate[1] = round(($miscount[1]/($gamecount[0]+$gamecount[2]+$gamecount[3]))*100, 0);
							}

							if ($gamecount[1] != 0)
								$misrate[2] = round(($miscount[2]/$gamecount[1])*100, 0);
							else
								$misrate[2] = 0;
							
							if ($gamecount[4] != 0)
								$misrate[3] = round(($miscount[3]/$gamecount[4])*100, 0);
							else
								$misrate[3] = 0;
							
							if ($gamecount[0] == 0 && $gamecount[1] == 0 && $gamecount[2] == 0 && $gamecount[3] == 0 && $gamecount[4] == 0)
								$misrate[4] = 0;
							else
								$misrate[4] = round(($miscount[4]/($gamecount[0]+$gamecount[1]+$gamecount[2]+$gamecount[3]+$gamecount[4]))*100, 0);
							
							for ($i = 0; $i < count($misarray); $i++) { ?>
								<li><div data-percentage=<?php echo $misrate[$i] ?> class="bar"></div><span><?php echo $misarray[$i]?></span></li>
							<?php } ?>
						</ul>
					</div>
					<div class="y-axis-mark miscon">比例(%)</div>
					<div class="x-axis-mark miscon">迷思概念</div>
				</div> <!-- end analysis chart -->
			</div> <!-- end tab2: misconception -->

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