<?php
session_start();

include("userdb_connect.php");

$name = $_POST['username'];
$pass = $_POST['password'];

//search DB
$sql = "SELECT * FROM $dbtablename where username = '$name'";
$result = mysqli_query($Link, $sql);
$count = mysqli_num_rows($result);

for ($i = 0; $i < $count; $i++)
    $rs = mysqli_fetch_row($result);

if ($name != NULL && $pass != NULL) {
    if ($rs[1] == $name) {
        if ($rs[2] == $pass) {
            $_SESSION['username'] = $name;
            echo $name.' login';
            $rs[3]++;
            $countquery = "UPDATE user SET logincount = '$rs[3]' where username = '$name'";
            $result = mysqli_query($Link, $countquery); 
        } else {
            echo $name.' wrong password';   
        }
    } else {
        $query = "insert into $dbtablename(user_id, username, password) values (null, '$name', '$pass')";
        $result = mysqli_query($Link, $query) or die(mysqli_error($Link));
        echo $name.' registered';
    }  
} else {
    echo 'login failed';
}

mysqli_close($Link);

?>