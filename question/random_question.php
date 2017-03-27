<?php

$Link = mysqli_connect('localhost', 'root', '12345678'); //連結伺服器
mysqli_select_db($Link, "graduation_project"); //選擇資料庫
//$ranOnedata = "SELECT * FROM testbank where 1 order by rand() limit 1";//在testbank資料表中隨機取一筆資料

$ranOnedata = "SELECT * FROM testbank where questions_id in (3, 5, 6, 12, 29, 32, 37, 45, 46, 47, 48, 66) order by rand() limit 1";

// $ranOnedata = "SELECT * FROM testbank where questions_id = 3";
//$ranOnedata = "SELECT * FROM testbank where questions_id in (3, 5, 6, 12) order by rand() limit 1";
//$ranOnedata = "SELECT * FROM testbank where questions_id in (29, 32, 37, 66) order by rand() limit 1";
//$ranOnedata = "SELECT * FROM testbank where questions_id in (45, 46, 47, 48) order by rand() limit 1";

mysqli_query($Link, "SET CHARACTER SET utf8");	//送出Big5編碼的MySQL指令
mysqli_query($Link,  "SET collation_connection = 'utf8_unicode_ci'");
$result = mysqli_query($Link, $ranOnedata);
$ran_records = mysqli_num_rows($result);
mysqli_close($Link);

$a = rand(0, 2);
//$a = 0;

?>