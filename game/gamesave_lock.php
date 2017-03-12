<?php
include("../db_connect.php");

$dbtablename = "game_lock_record";

$lockdata = $_POST['lockdata'];
//echo $lockdata;

$data = explode("@", $lockdata);

//split
$ques = $data[0];
$ans = $data[1];
$userans = $data[2];
$status = $data[3];
$teaching = $data[4];
$time = $data[5];
$answertime = $data[6];
$user = $data[7];
//echo $ques.' '.$ans.' '.$userans.' '.$status.' '.$teaching.' '.$time.' '.$answertime.' '.$user;


if ($ques != NULL && $ans != NULL && $userans != NULL && 
    $status != NULL && $teaching != NULL && $time != NULL) {
    $query = "insert into $dbtablename(lockrecord_id, question, answer, useranswer, status, teaching, time, answertime, username) values (null, '$ques', '$ans', '$userans', '$status', '$teaching', '$time', '$answertime', '$user')";
    $result = mysqli_query($Link, $query) or die(mysqli_error($Link));
    echo "[LockGame] game data save successfully";
} else {
    echo "[LockGame] game data save failed";
}


?>