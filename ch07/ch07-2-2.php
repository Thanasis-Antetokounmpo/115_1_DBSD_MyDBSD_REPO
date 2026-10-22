<?php
echo "<HR>";
echo "SID: C113181124<br/>";
echo "Name: 黃柏樽<br/>";
echo "EX03<br/>";
echo "<HR>";

$arr = array(
"Color"=>"Black",
"name"=>"Chen-Hui_An",
"Shape"=>"Triangle",
100
);

  $arr["type"]="PHP";
  unset($arr["type"]);

  foreach ($arr as $key => $value) {
  echo "$key =>$value";
  }
  echo "<br/>";
  print_r($arr);
  