<?php
include("../db_connect.php");

$dbtablename = "game_quickanswer_record";

$quickanswerdata = $_POST['quickanswerdata'];
//echo $quickanswerdata;

$data = explode("@", $quickanswerdata);

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
    $query = "insert into $dbtablename(quickrecord_id, question, answer, useranswer, status, teaching, time, answertime, username) values (null, '$ques', '$ans', '$userans', '$status', '$teaching', '$time', '$answertime', '$user')";
    $result = mysqli_query($Link, $query) or die(mysqli_error($Link));
    echo "[QuickanswerGame] game data save successfully";
} else {
    echo "[QuickanswerGame] game data save failed";
}


?>