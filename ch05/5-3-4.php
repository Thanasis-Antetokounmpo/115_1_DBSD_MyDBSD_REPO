# name:黃柏樽<BR>
# sid:C113181124<BR>
# ex04
<HR>
<?php
$total=0;
for( $i = 0; $i <=15; $i++ ){
    if($i%2== 1)
continue;
    echo"|".$i;
    $total += $i;
}