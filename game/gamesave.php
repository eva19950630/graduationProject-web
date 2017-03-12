<?php
include("../db_connect.php");

$dbtablename = "game_record";

$gamedata = $_POST['gamedata'];
//echo $gamedata;

$data = explode("@", $gamedata);

//split
$gamename = $data[0];
$ques = $data[1];
$ans = $data[2];
$userans = $data[3];
$button = $data[4];
$status = $data[5];
$teaching = $data[6];
$answertime = $data[7];
$time = $data[8];
$user = $data[9];
// echo $gamename.' '.$ques.' '.$ans.' '.$userans.' '.$button.' '.$status.' '.$teaching.' '.$answertime.' '.$time.' '.$user;


if ($gamename != NULL && $ques != NULL && $ans != NULL && $userans != NULL && $button != NULL &&
    $status != NULL && $teaching != NULL && $answertime != NULL && $time != NULL) {
    $query = "insert into $dbtablename(record_id, gamename, question, answer, useranswer, button, status, teaching, answertime, time, username) values (null, '$gamename', '$ques', '$ans', '$userans', '$button', '$status', '$teaching', '$answertime', '$time', '$user')";
    $result = mysqli_query($Link, $query) or die(mysqli_error($Link));
    echo "[Game] game data save successfully";
} else {
    echo "[Game] game data save failed";
}


?>