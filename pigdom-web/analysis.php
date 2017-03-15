
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
		</ul>
		<div class="tab_container">
			<!-- tab1: account -->
			<h3 class="d_active tab_drawer_heading" rel="tab1">帳號</h3>
			<div id="tab1" class="tab_content">
				<!-- condition select -->
				<div class="cond-select">
					<div class="container">
						<div class="col-md-4">
							<form method="post" name="form1" action="">
							篩選條件：
							<select name="select1" class="selectbox">
								<option value="登入次數">登入次數</option>
								<option value="答對次數">答對次數</option>
								<option value="觀看補救教學次數">觀看補救教學次數</option>
								<option value="使用APP時間">使用APP時間</option>
								<option value="迷思概念">迷思概念</option>
							</select>
						</div>
						<div class="col-md-4">
							選擇帳號：
							<select name="select2" class="selectbox">
								<option value="alluser">全部學生</option>
							</select>
						</div>
						<div class="col-md-4">
							<input type="submit" name="Submit" value="完成" class="btn btn-default filter" style="outline-color: #f2db63;">
						</div>
							</form>
					</div>
				</div> <!-- end condition select -->

				<!-- analysis chart -->
				<div class="cond-chart account">
					<div class="chart account">
						<ul class="chart-numbers account">
							<li><span>100%</span></li>
							<li><span>90%</span></li>
							<li><span>80%</span></li>
							<li><span>70%</span></li>
							<li><span>60%</span></li>
							<li><span>50%</span></li>
							<li><span>40%</span></li>
							<li><span>30%</span></li>
							<li><span>20%</span></li>
							<li><span>10%</span></li>
							<li><span>0%</span></li>
						</ul>
						<ul class="chart-bars account">
							<li><div data-percentage="56" class="bar"></div><span>50101</span></li>
							<li><div data-percentage="33" class="bar"></div><span>50102</span></li>
							<li><div data-percentage="54" class="bar"></div><span>50103</span></li>
							<li><div data-percentage="94" class="bar"></div><span>50104</span></li>
							<li><div data-percentage="44" class="bar"></div><span>50105</span></li>
							<li><div data-percentage="23" class="bar"></div><span>50106</span></li>
							<li><div data-percentage="40" class="bar"></div><span>50107</span></li>
							<li><div data-percentage="60" class="bar"></div><span>50108</span></li>
							<li><div data-percentage="24" class="bar"></div><span>50109</span></li>
							<li><div data-percentage="73" class="bar"></div><span>50110</span></li>
							<li><div data-percentage="100" class="bar"></div><span>50111</span></li>
							<li><div data-percentage="38" class="bar"></div><span>50112</span></li>
							<li><div data-percentage="72" class="bar"></div><span>50113</span></li>
							<li><div data-percentage="60" class="bar"></div><span>50114</span></li>
							<li><div data-percentage="12" class="bar"></div><span>50115</span></li>
							<li><div data-percentage="90" class="bar"></div><span>50116</span></li>
							<li><div data-percentage="78" class="bar"></div><span>50117</span></li>
							<li><div data-percentage="63" class="bar"></div><span>50118</span></li>
							<li><div data-percentage="52" class="bar"></div><span>50119</span></li>
							<li><div data-percentage="44" class="bar"></div><span>50120</span></li>
							<li><div data-percentage="29" class="bar"></div><span>50121</span></li>
							<li><div data-percentage="38" class="bar"></div><span>50122</span></li>
							<li><div data-percentage="72" class="bar"></div><span>50123</span></li>
							<li><div data-percentage="60" class="bar"></div><span>50124</span></li>
							<li><div data-percentage="12" class="bar"></div><span>50125</span></li>
							<li><div data-percentage="90" class="bar"></div><span>50126</span></li>
							<li><div data-percentage="78" class="bar"></div><span>50127</span></li>
							<li><div data-percentage="63" class="bar"></div><span>50128</span></li>
							<li><div data-percentage="52" class="bar"></div><span>50129</span></li>
							<li><div data-percentage="44" class="bar"></div><span>50130</span></li>
						</ul>
					</div>
					<div class="y-axis-mark account">比例(%)</div>
					<div class="x-axis-mark account">學生帳號</div>
				</div> <!-- end analysis chart -->
			</div> <!-- end tab1: account -->
			
			<!-- tab2: game -->
			<h3 class="tab_drawer_heading" rel="tab2">遊戲</h3>
			<div id="tab2" class="tab_content">
				<div class="cond-select">
					<div class="container">
						<div class="col-md-4">
							<form method="post" name="form1" action="">
							篩選條件：
							<select name="select3" class="selectbox">
								<option value="被遊玩次數">被遊玩次數</option>
								<option value="答題狀況">答題狀況</option>
							</select>
						</div>
						<div class="col-md-4">
							選擇遊戲：
							<select name="select4" class="selectbox">
								<option value="alluser">全部遊戲</option>
							</select>
						</div>
						<div class="col-md-4">
							<input type="submit" name="Submit" value="完成" class="btn btn-default filter" style="outline-color: #f2db63;">
						</div>
							</form>
					</div>
				</div>

				<!-- analysis chart -->
				<div class="cond-chart game">
					<div class="chart game">
						<ul class="chart-numbers game">
							<li><span>100%</span></li>
							<li><span>90%</span></li>
							<li><span>80%</span></li>
							<li><span>70%</span></li>
							<li><span>60%</span></li>
							<li><span>50%</span></li>
							<li><span>40%</span></li>
							<li><span>30%</span></li>
							<li><span>20%</span></li>
							<li><span>10%</span></li>
							<li><span>0%</span></li>
						</ul>
						<ul class="chart-bars game">
							<li><div data-percentage="56" class="bar"></div><span>大家來解鎖</span></li>
							<li><div data-percentage="33" class="bar"></div><span>大家來撈魚</span></li>
							<li><div data-percentage="54" class="bar"></div><span>大家來蓋章</span></li>
							<li><div data-percentage="94" class="bar"></div><span>大家來平衡</span></li>
							<li><div data-percentage="44" class="bar"></div><span>大家來買糖</span></li>
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

