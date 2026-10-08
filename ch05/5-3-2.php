
# name:黃柏樽<BR>
# sid:C113181124<BR>
# ex03
<HR>
<?php
$result=0;
$n=0;
while($result <= 10){
    $result = $result* $n;
    echo "|".$result;
    $n=$n+ 1;
    echo "|".$n;
    $result++;
}
$n=$n+ 1;
echo"result:".$result;