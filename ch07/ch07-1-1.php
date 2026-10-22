<?php
echo "<HR>";
echo "SID: C113181124<br/>";
echo "Name: 黃柏樽<br/>";
echo "EX02<br/>";
echo "<HR>";


$scores =array(22,16,30,24);
$total =0;

foreach ($scores as $score){
    echo"element:".$score."<br/>";
    $total += $score;
}
echo "Total: " . $total;

print_r($scores);