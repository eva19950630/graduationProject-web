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

<?php
// GET user data
$data_user = "SELECT * FROM user";
$userdata = mysqli_query($Link, $data_user);

// GET username data
$data_username = "SELECT username FROM user";
$usernamedata = mysqli_query($Link, $data_username);
?>

	<!-- account page -->
	<div class="account">
		<!-- account select options -->
		<div class="account-select">
			<div class="container">
				<div class="col-md-4">
					<form>
					選擇帳號：
					<select name="select-account" class="selectbox">
					<?php while ($userrow = mysqli_fetch_array($usernamedata)) { ?>
						<option value=<?php $userrow[0] ?>><?php echo $userrow[0] ?></option>
					<?php } ?>
					</select>
					</form>
				</div>
				<div class="col-md-4">
					<button type="button" class="btn btn-default">全部資料</button>
				</div>
			</div>
		</div> <!-- end account-select -->
		<!-- account record table -->
		<div class="account-recordtable">
			<table border="1">
				<tr class="table-head">
	                <td>編號</td>
	                <td>學生帳號</td>
	                <td>學生密碼</td>
	                <td>登入次數</td>
	            </tr>
	            <?php
				$i = 1;
				while ($row = mysqli_fetch_array($userdata)) {
				?>
	            <tr>
	                <td><?php echo $i ?></td>
	                <td><?php echo $row[1]; ?></td>
	                <td><?php echo $row[2]; ?></td>
	                <td><?php echo $row[3]; ?></td>
	            </tr>
	            <?php 
	            $i++;
	            } ?>
	        </table>
		</div>
	</div>
	<!-- end account page -->

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