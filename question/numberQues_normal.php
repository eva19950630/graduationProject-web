<?php
include("random_question.php");

/*
3 A-B+C
5 A+B+C+D
6 A+B+C-D
12 A-B-C-D
29 A*B*C
32 A/B/C
37 A*B+C
45 A*B+C*D
46 A*B-C*D
47 A/B+C/D
48 A/B-C/D
66 A*(B+C)
*/

for ($i = 0; $i < $ran_records; $i++) {
    $rs = mysqli_fetch_row($result);
    $qid = $rs[0];
    $qkind = $rs[1];
    $hint = $rs[4];
}

if ($qid == 3 || $qid == 5 || $qid == 6 || $qid == 12) {
//    echo $qid;
    $A = rand(300, 500);
    $B = rand(30, 75);
    $C = rand(2, 125);
    $D = rand(2, 25);
    $E = 0;
    $F = 0;
    calculate($A, $B, $C, $D, $E, $F, $qid, $qkind, $hint);
} else if ($qid == 29 || $qid == 32 || $qid == 37 || $qid == 66) {
//    echo $qid;
    $A = rand(2, 30);
    $B = rand(2, 10);
    $C = rand(2, 5);
    $D = $A * $B * $C;
    $E = 0;
    $F = 0;
    calculate($A, $B, $C, $D, $E, $F, $qid, $qkind, $hint);
} else if ($qid == 45 || $qid == 46 || $qid == 47) {
//    echo $qid;
    $A = rand(10, 20);
    $B = rand(35, 50);
    $C = rand(2, 50);
    $D = rand(2, 6);
    $E = $A * $B;
    $F = $C * $D;
    calculate($A, $B, $C, $D, $E, $F, $qid, $qkind, $hint);
} else if ($qid == 48) {
//    echo $qid;
    $A = rand(20, 50);
    $B = rand(10, 20);
    $C = rand(2, 10);
    $D = rand(5, 10);
    $E = $A * $B;
    $F = $C * $D;
    calculate($A, $B, $C, $D, $E, $F, $qid, $qkind, $hint); 
}

function calculate($a, $b, $c, $d, $e, $f, $Q, $K, $H) {
    echo $Q.'@'.$K.'@';
    $R1 = rand(0, 5);
    $R2 = rand(0, 1);
    $R3 = rand(0, 1);
    switch($Q) {
        case 3:
            echo $a." - ".$b." + ".$c." = ?".'@';
            $ans = $a - $b + $c;
            break;
        case 5:
            echo $a." + ".$b." + ".$c." + ".$d." = ?".'@';
            $ans = $a + $b + $c + $d;
            break;
        case 6:
            echo $a." + ".$b." + ".$c." - ".$d." = ?".'@';
            $ans = $a + $b + $c - $d;
            break;
        case 12:
            echo $a." - ".$b." - ".$c." - ".$d." = ?".'@';
            $ans = $a - $b - $c - $d;
            break;
        case 29:
            echo $a." × ".$b." × ".$c." = ?".'@';
            $ans = $a * $b * $c;
            break;
        case 32:
            if ($R1 == 0) {
                echo $d." ÷ ".$a." ÷ ".$b." = ?".'@';
                $ans = $c;
            } else if ($R1 == 1) {
                echo $d." ÷ ".$a." ÷ ".$c." = ?".'@';
                $ans = $b;
            } else if ($R1 == 2) {
                echo $d." ÷ ".$b." ÷ ".$a." = ?".'@';
                $ans = $c;
            } else if ($R1 == 3) {
                echo $d." ÷ ".$b." ÷ ".$c." = ?".'@';
                $ans = $a;
            } else if ($R1 == 4) {
                echo $d." ÷ ".$c." ÷ ".$a." = ?".'@';
                $ans = $b;
            } else if ($R1 == 5) {
                echo $d." ÷ ".$c." ÷ ".$b." = ?".'@';
                $ans = $a;
            }
            break;
        case 37:
            echo $a." × ".$b." + ".$c." = ?".'@';
            $ans = $a * $b + $c;
            break;
        case 66:
            echo $a." × ( ".$b." + ".$c." ) = ?".'@';
            $ans = $a * ($b + $c);
            break;
        case 45:
            echo $a." × ".$b." + ".$c." × ".$d." = ?".'@';
            $ans = $a * $b + $c * $d;
            break;
        case 46:
            echo $a." × ".$b." - ".$c." × ".$d." = ?".'@';
            $ans = $a * $b - $c * $d;
            break;
        case 47:
            if ($R2 == 0 && $R3 == 0) {
                echo $e." ÷ ".$a." + ".$f." ÷ ".$c." = ?".'@';
                $ans = $b + $d;
            } else if ($R2 == 0 && $R3 == 1) {
                echo $e." ÷ ".$a." + ".$f." ÷ ".$d." = ?".'@';
                $ans = $b + $c;
            } else if ($R2 == 1 && $R3 == 0) {
                echo $e." ÷ ".$b." + ".$f." ÷ ".$c." = ?".'@';
                $ans = $a + $d;
            } else if ($R2 == 1 && $R3 == 1) {
                echo $e." ÷ ".$b." + ".$f." ÷ ".$d." = ?".'@';
                $ans = $a + $c;
            } 
            break;
        case 48:
            if ($R2 == 0 && $R3 == 0) {
                echo $e." ÷ ".$a." - ".$f." ÷ ".$c." = ?".'@';
                $ans = $b - $d;
            } else if ($R2 == 0 && $R3 == 1) {
                echo $e." ÷ ".$a." - ".$f." ÷ ".$d." = ?".'@';
                $ans = $b - $c;
            } else if ($R2 == 1 && $R3 == 0) {
                echo $e." ÷ ".$b." - ".$f." ÷ ".$c." = ?".'@';
                $ans = $a - $d;
            } else if ($R2 == 1 && $R3 == 1) {
                echo $e." ÷ ".$b." - ".$f." ÷ ".$d." = ?".'@';
                $ans = $a - $c;
            } 
            break;
    }
    echo $ans.'@'.$H;
}

?>