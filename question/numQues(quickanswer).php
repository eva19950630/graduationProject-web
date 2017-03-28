<?php
include("random5_numquestion.php");

for ($i = 0; $i < $ran_records; $i++) {
    $rs = mysqli_fetch_row($result);
    $qid = $rs[0];
    $qkind = $rs[1];
    $hint = $rs[4];

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
            $W1 = $a + $b - $c;
            $W2 = $a + $b + $c;
            $W3 = $a - $b - $c;
            break;
        case 5:
            echo $a." + ".$b." + ".$c." + ".$d." = ?".'@';
            $ans = $a + $b + $c + $d;
            $W1 = $a + $b + $c - $d;
            $W2 = $a - $b - $c - $d;
            $W3 = $a + $b - $c + $d;
            break;
        case 6:
            echo $a." + ".$b." + ".$c." - ".$d." = ?".'@';
            $ans = $a + $b + $c - $d;
            $W1 = $a - $b + $c + $d;
            $W2 = $a + $b - $c + $d;
            $W3 = $a + $b + $c + $d;
            break;
        case 12:
            echo $a." - ".$b." - ".$c." - ".$d." = ?".'@';
            $ans = $a - $b - $c - $d;
            $W1 = $a + $b + $c + $d;
            $W2 = $a + $b - $c - $d;
            $W3 = $a - $b - $c + $d;
            break;
        case 29:
            echo $a." × ".$b." × ".$c." = ?".'@';
            $ans = $a * $b * $c;
            $W1 = $a * ($b-1) * $c;
            $W2 = $a * $b;
            $W3 = $a * $b * $c * 2;
            break;
        case 32:
            if ($R1 == 0) {
                echo $d." ÷ ".$a." ÷ ".$b." = ?".'@';
                $ans = $c;
                $W1 = $c + 1;
                $W2 = $c + 2;
                $W3 = $c + 3;
            } else if ($R1 == 1) {
                echo $d." ÷ ".$a." ÷ ".$c." = ?".'@';
                $ans = $b;
                $W1 = $b - 2;
                $W2 = $b - 3;
                $W3 = $b + 2;
            } else if ($R1 == 2) {
                echo $d." ÷ ".$b." ÷ ".$a." = ?".'@';
                $ans = $c;
                $W1 = $c + 1;
                $W2 = $c + 2;
                $W3 = $c + 3;
            } else if ($R1 == 3) {
                echo $d." ÷ ".$b." ÷ ".$c." = ?".'@';
                $ans = $a;
                $W1 = $a + 1;
                $W2 = $a + 2;
                $W3 = $a + 3;
            } else if ($R1 == 4) {
                echo $d." ÷ ".$c." ÷ ".$a." = ?".'@';
                $ans = $b;
                $W1 = $b - 2;
                $W2 = $b - 3;
                $W3 = $b + 2;
            } else if ($R1 == 5) {
                echo $d." ÷ ".$c." ÷ ".$b." = ?".'@';
                $ans = $a;
                $W1 = $a + 1;
                $W2 = $a + 2;
                $W3 = $a + 3;
            }
            break;
        case 37:
            echo $a." × ".$b." + ".$c." = ?".'@';
            $ans = $a * $b + $c;
            $W1 = $a + $b * $c;
            $W2 = $a * $b - $c;
            $W3 = $a * ($b-1) + $c;
            break;
        case 66:
            echo $a." × ( ".$b." + ".$c." ) = ?".'@';
            $ans = $a * ($b + $c);
            $W1 = $a + $b * $c;
            $W2 = $a * $b + $c;
            $W3 = $a * $b * $c;
            break;
        case 45:
            echo $a." × ".$b." + ".$c." × ".$d." = ?".'@';
            $ans = $a * $b + $c * $d;
            $W1 = $a * $b - $c * $d;
            $W2 = ($a * $b + $c) * $d;
            $W3 = $a * $b * $d + $c;
            break;
        case 46:
            echo $a." × ".$b." - ".$c." × ".$d." = ?".'@';
            $ans = $a * $b - $c * $d;
            $W1 = $a * $b + $c * $d;
            $W2 = $a + $b + $c + $d;
            $W3 = $a * $b * $d - $c;
            break;
        case 47:
            if ($R2 == 0 && $R3 == 0) {
                echo $e." ÷ ".$a." + ".$f." ÷ ".$c." = ?".'@';
                $ans = $b + $d;
                $W1 = $b - $d;
                $W2 = ($b-1) + $d;
                $W3 = $b + ($d-2);
            } else if ($R2 == 0 && $R3 == 1) {
                echo $e." ÷ ".$a." + ".$f." ÷ ".$d." = ?".'@';
                $ans = $b + $c;
                $W1 = ($b-1) + $c;
                $W2 = $b + ($c-2);
                $W3 = $b + $c + 1;
            } else if ($R2 == 1 && $R3 == 0) {
                echo $e." ÷ ".$b." + ".$f." ÷ ".$c." = ?".'@';
                $ans = $a + $d;
                $W1 = ($a-1) + $d;
                $W2 = $a + ($d-2);
                $W3 = $a - $d;
            } else if ($R2 == 1 && $R3 == 1) {
                echo $e." ÷ ".$b." + ".$f." ÷ ".$d." = ?".'@';
                $ans = $a + $c;
                $W1 = ($a-1) + $c;
                $W2 = $a + ($c-2);
                $W3 = $a + $c - 3;
            } 
            break;
        case 48:
            if ($R2 == 0 && $R3 == 0) {
                echo $e." ÷ ".$a." - ".$f." ÷ ".$c." = ?".'@';
                $ans = $b - $d;
                $W1 = ($b-1) - $d;
                $W2 = $b - ($d-2);
                $W3 = $b + $d;
            } else if ($R2 == 0 && $R3 == 1) {
                echo $e." ÷ ".$a." - ".$f." ÷ ".$d." = ?".'@';
                $ans = $b - $c;
                $W1 = ($b-1) - $c;
                $W2 = $b - ($c-2);
                $W3 = $b + $c;
            } else if ($R2 == 1 && $R3 == 0) {
                echo $e." ÷ ".$b." - ".$f." ÷ ".$c." = ?".'@';
                $ans = $a - $d;
                $W1 = ($a-1) - $d;
                $W2 = $a - ($d-2);
                $W3 = $a + $d;
            } else if ($R2 == 1 && $R3 == 1) {
                echo $e." ÷ ".$b." - ".$f." ÷ ".$d." = ?".'@';
                $ans = $a - $c;
                $W1 = ($a-1) - $c;
                $W2 = $a - ($c-2);
                $W3 = $a + $c;
            } 
            break;
    }
    echo $ans.'@'.$W1.'@'.$W2.'@'.$W3.'#';
}

?>