<?php
$Link = mysqli_connect('localhost', 'root', '12345678'); //連結伺服器
$db = mysqli_select_db($Link, "graduation_project"); //選擇資料庫
mysqli_query($Link, "SET CHARACTER SET utf8");	//送出Big5編碼的MySQL指令
mysqli_query($Link,  "SET collation_connection = 'utf8_unicode_ci'");

$table = "test";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$userdata = "SELECT name FROM $table";
$user = mysqli_query($Link, $userdata);

if ($_POST) {
	echo $_POST['select1'];
	echo '</br>';
	echo $_POST['select2'];
	$selectuser = $_POST['select1'];
	$selectgrade = $_POST['select2'];
} else {
	echo "no select user";
	echo '</br>';
	echo "no select grade";
	$selectuser = "alluser";
	$selectgrade = "allgrade";
}

if ($selectuser == "alluser" && $selectgrade == "allgrade") {
	$data = "SELECT * FROM $table";
	$result = mysqli_query($Link, $data);
} else {
	if ($selectuser == "alluser")
		$data = "SELECT * FROM $table where grade='$selectgrade'";
	else if ($selectgrade == "allgrade")
		$data = "SELECT * FROM $table where name = '$selectuser'";
	else
		$data = "SELECT * FROM $table where name = '$selectuser' AND grade='$selectgrade'";
	$result = mysqli_query($Link, $data);
}
?>

	<form method="post" name="form1" action="">
	<?php echo $selectuser.'</br>'; ?>
		<select name="select1" class="selectbox" id="select1">
			<option value="alluser">全部學生</option>
		<?php while ($userrow = mysqli_fetch_array($user)) { ?>
			<?php if($userrow[0] == $selectuser) : ?>
				<option value=<?php echo $userrow[0]?> selected><?php echo $userrow[0] ?></option>
			<?php else : ?>
				<option value=<?php echo $userrow[0]?>><?php echo $userrow[0] ?></option>
			<?php endif; ?>
		<?php } ?>
		</select>

	<select name="select2" class="selectbox">
		<option value="allgrade">全部等級</option>
		<?php $a=array("A","B","C","F"); 
		for ($i = 0; $i < count($a); $i++) { ?>
			<?php if($a[$i] == $selectgrade) : ?>
				<option value=<?php echo $a[$i]?> selected><?php echo $a[$i]?></option>
			<?php else : ?>
				<option value=<?php echo $a[$i]?>><?php echo $a[$i]?></option>
			<?php endif; ?>
		<?php } ?>
		<!-- <option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="F">F</option> -->
	</select>
	<input type="submit" name="Submit" id="submit" value="提交">
	</form>

	<table border='1'>
	    <tr>
	        <td>id</td>
	        <td>name</td>
	        <td>score</td>
	        <td>grade</td>
	    </tr>
		<?php while ($row = mysqli_fetch_array($result)) { ?>
	    <tr>
	        <td><?php echo $row[0]?></td>
	        <td><?php echo $row[1]?></td>
	        <td><?php echo $row[2]?></td>
	        <td><?php echo $row[3]?></td>
	    </tr>
	    <?php
	    }
	    ?>
	</table>

</body>


</html>


<?php mysqli_close($Link); ?>