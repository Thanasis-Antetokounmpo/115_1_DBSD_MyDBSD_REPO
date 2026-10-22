<?php
echo "<HR>";
echo "SID: C113181124<br/>";
echo "Name: 黃柏樽<br/>";
echo "EX01<br/>";
echo "<HR>";

print "PHP與MySQL網頁設計<br/>";
// 匯率換算函數
function rateExchange($amount, $rate) {
   $result = $amount * $rate;
   return $result;
}


$amount = 1000;
$rate = 28.1;
// 呼叫函數
$result = rateExchange($amount, $rate);
print "1000美金兌換新台幣=". $result ."元<br/>";
?>