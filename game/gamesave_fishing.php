<?php
include("../db_connect.php");

$dbtablename = "game_fishing_record";

$fishingdata = $_POST['fishingdata'];
//echo $fishingdata;

$data = explode("@", $fishingdata);

//split
$ques = $data[0];
$ans = $data[1];
$userans = $data[2];
$button = $data[3];
$status = $data[4];
$teaching = $data[5];
$time = $data[6];
$answertime = $data[7];
$user = $data[8];
//echo $ques.' '.$ans.' '.$userans.' '.$button.' '.$status.' '.$teaching.' '.$time.' '.$answertime.' '.$user;


if ($ques != NULL && $ans != NULL && $userans != NULL && $userans != NULL &&
    $status != NULL && $teaching != NULL && $time != NULL) {
    $query = "insert into $dbtablename(fishingrecord_id, question, answer, useranswer, button, status, teaching, time, answertime, username) values (null, '$ques', '$ans', '$userans', '$button', '$status', '$teaching', '$time', '$answertime', '$user')";
    $result = mysqli_query($Link, $query) or die(mysqli_error($Link));
    echo "[FishingGame] game data save successfully";
} else {
    echo "[FishingGame] game data save failed";
}


?>