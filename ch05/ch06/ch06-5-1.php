<?php
echo "<HR>";
echo "SID: C1234567<br/>";
echo "Name: Smith<br/>";
echo "<HR>";

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