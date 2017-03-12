<?php
$Link = mysqli_connect('localhost', 'root', '12345678'); //連結伺服器
mysqli_select_db($Link, "graduation_project"); //選擇資料庫
$data = "SELECT * FROM testbank";  //在testbank資料表中取資料
mysqli_query($Link, "SET CHARACTER SET utf8");	// 送出Big5編碼的MySQL指令
mysqli_query($Link,  "SET collation_connection = 'utf8_unicode_ci'");
$result = mysqli_query($Link, $data);
$total_records = mysqli_num_rows($result);
mysqli_close($Link);


/*if ($_POST['download'] != NULL) {
    for ($i = 0; $i < $ran_records; $i++) {
        $rs = mysqli_fetch_row($result);
        echo $rs[1];  //Question
    }
}*/

/*for ($i = 0; $i < $ran_records; $i++) {
    $rs = mysqli_fetch_row($result);
    echo $rs[0].' '.$rs[1];
}*/

    
?>

<html>
    <head>
        <title>Testbank Database</title>
    </head>
    <?php
    echo "</br>連線時間:  ";
    echo date("Y年m月d日  H:i:s");
    ?>
    <body>
    
    <p></p>
        <table border='1'>
            <tr>
                <td>questions_Num</td>
                <td>questions</td>
                <td>applied question</td>
                <td>aq_hint1</td>
                <td>hint2</td>
            </tr>
        <?php for ($i=0;$i<$total_records;$i++) {$rs = mysqli_fetch_row($result); //將陣列以欄位名索引   ?>
            <tr>
                <td><?php echo $rs[0]?></td>
                <td><?php echo $rs[1]?></td>
                <td><?php echo $rs[2]?></td>
                <td><?php echo $rs[3]?></td>
                <td><?php echo $rs[4]?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>