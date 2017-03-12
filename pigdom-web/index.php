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
				<li><a href="#history" id="history-link">歷程記錄</a></li>
				<li><a href="#analysis" id="analysis-link">統計分析</a></li>
				<li><a href="#account" id="account-link">帳號管理</a></li>
				<li><a href="" id="index-link">回到首頁</a></li>
			</ul>
			<div class="sidebar-menu update">
				<p><i class="fa fa-clock-o"></i>&emsp;資料最後更新時間：</p>
				&emsp;2017/03/12 00:00:00
			</div>
		</div>
	</div>
	<!-- end sidebar -->
	
	<!-- index page -->
	<div class="rightside-page index">
		首頁abc
	</div>
	<!-- end index page -->

	<!-- history page -->
	<div style="display:none" class="history">
		<div class="history-select">
			<div class="container">
				<div class="col-md-4">
					<form>
					選擇帳號：
					<select name="select-account" class="selectbox">
					　<option value="50101">50101</option>
					　<option value="50102">50102</option>
					　<option value="50103">50103</option>
					　<option value="50104">50104</option>
					</select>
					</form>
				</div>
				<div class="col-md-4">
					<form>
					選擇遊戲：
					<select name="select-game" class="selectbox">
					　<option value="game-lock">豬豬解密碼</option>
					　<option value="game-fishing">豬豬來撈魚</option>
					　<option value="game-quickanswer">豬豬蓋印章</option>
					　<option value="game-balance">豬豬玩天平</option>
					　<option value="game-buying">豬豬糖果屋</option>
					</select>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end history page -->

	<!-- analysis page -->
	<div style="display:none" class="analysis">
		統計分析<br>
		帳號/遊戲<br>
		帳號:登入次數(總登入時間)/答對次數/觀看教學次數/迷思概念(一人一頁,可下拉式選帳號)<br>
		遊戲:被遊玩次數/?<br>
		圖表
	</div>
	<!-- end analysis page -->

	<!-- account page -->
	<div style="display:none" class="account">
		帳號管理<br>
		搜尋帳號<br>
		帳號密碼表格
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