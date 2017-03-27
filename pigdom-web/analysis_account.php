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
				<p><i class="fa fa-clock-o"></i>&emsp;系統最後更新時間：</p>
				&emsp;2017/03/28 00:58:25
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
			<a href="analysis_account.php"><li class="active" rel="tab1">帳號</li></a>
			<a href="analysis_misconception.php"><li rel="tab2">迷思概念</li></a>
		</ul>
		<div class="tab_container">

<?php
$perarray=array("100%", "90%", "80%", "70%", "60%", "50%", "40%", "30%", "20%", "10%", "0%");

// GET username data
$data_username = "SELECT username FROM user";
$usernamedata = mysqli_query($Link, $data_username);

if ($_POST) {
	// echo $_POST['select1'];
	$account_selectcond = $_POST['select1'];
} else {
	// echo "答對率";
	$account_selectcond = "答對率";
}
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
								<?php $account_cond_array=array("答對率", "觀看補救教學比例", "排名RANK"); 
								for ($i = 0; $i < count($account_cond_array); $i++) { ?>
									<?php if($account_cond_array[$i] == $account_selectcond) : ?>
										<option value=<?php echo $account_cond_array[$i]?> selected><?php echo $account_cond_array[$i] ?></option>
									<?php else : ?>
										<option value=<?php echo $account_cond_array[$i]?>><?php echo $account_cond_array[$i] ?></option>
									<?php endif; ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-md-4">
							<input type="submit" name="Submit" value="查看分析" class="btn btn-default filter" style="outline-color: #f2db63;">
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
							<?php while ($userrow = mysqli_fetch_array($usernamedata)) { 

								// GET game data record
								$data_gamerecord = "SELECT * FROM game_record where username = '$userrow[0]'";
								$recorddata = mysqli_query($Link, $data_gamerecord); 
								
								$single_usercount = 0; $rightcount = 0; $wrongcount = 0; $teachingcount = 0; $rightalltime = 0;
								while ($row = mysqli_fetch_array($recorddata)) {
									if ($row[6] != "-")
										$single_usercount++;
									if ($row[6] == "right") {
										$rightcount++;
										$rightalltime += $row[8];
									} else if ($row[6] == "wrong") {
										$wrongcount++;
									}
									if ($row[7] == "yes")
										$teachingcount++;
								}
								
								// calculate correct rate
								if ($single_usercount != 0 && $rightcount != 0)
									$correctrate = round(($rightcount/$single_usercount)*100, 0);
								else
									$correctrate = 0;

								// calculate teaching rate
								if ($single_usercount != 0 && $teachingcount != 0)
									$teachingrate = round(($teachingcount/$single_usercount)*100, 0);
								else
									$teachingrate = 0;

								//calculate rank
								if ($rightalltime == 0 && $wrongcount == 0)
									$rank = 0;
								else
									$rank = round(($rightalltime/($rightalltime+($wrongcount*5)))*100, 0);

							?>
								<?php if($account_selectcond == "答對率") : ?>
									<li><div data-percentage=<?php echo $correctrate ?> class="bar"></div><span><?php echo $userrow[0] ?></span></li>
								<?php elseif($account_selectcond == "觀看補救教學比例") : ?>
									<li><div data-percentage=<?php echo $teachingrate ?> class="bar"></div><span><?php echo $userrow[0] ?></span></li>
								<?php elseif($account_selectcond == "排名RANK") : ?>
									<li><div data-percentage=<?php echo $rank ?> class="bar"></div><span><?php echo $userrow[0] ?></span></li>
								<?php endif; ?>
							<?php } ?>
						</ul>
					</div>
				</div> <!-- end analysis chart -->
			</div> <!-- end tab1: account -->
	
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