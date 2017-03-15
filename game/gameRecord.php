<?php
	$userAccount = $_REQUEST['username'];
	// echo $username."<br>";
	// echo "123";
	// define("DB_server","localhost");
	// define("DB_user","root");
	// define("DB_password","0000");
	// define("DB_database","test");

	$DB_server = "localhost";
	$DB_user = 'root';
	$DB_password = '12345678';
	$DB_database = 'graduation_project';

	$conn = mysqli_connect($DB_server, $DB_user, $DB_password, $DB_database);

	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	mysqli_query($conn, "SET CHARACTER SET utf8");	//送出Big5編碼的MySQL指令
	mysqli_query($conn,  "SET collation_connection = 'utf8_unicode_ci'");
	// mysqli_select_db($conn, "test");

	$sql = "SELECT gamename, question, useranswer, answer FROM game_record WHERE username = '$userAccount'";
	// $sql = "SELECT user_account, user_Num, user_ID FROM test WHERE user_account = '$username'";
	$result = mysqli_query($conn, $sql);
	// if(!result){
	// 	echo ("Error: ".mysqli_error($connect));
	// 	exit();
	// }
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "     ".$row["gamename"]."   ".$row["question"]."  ".$row["useranswer"]."  ".$row["answer"]."@";
		}
	}else{
		echo "No data.\n";
	}
	// echo $result;
	mysqli_close($conn);

?>