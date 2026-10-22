<?php
echo "<HR>";
echo "SID: C113181124<br/>";
echo "Name: 黃柏樽<br/>";
echo "EX04<br/>";
echo "<HR>";
$ip = $_SERVER["REMOTE_ADDR"];
echo"IP ADDRESS:" . $ip . "<br/>";
$path = $_SERVER["SCRIPT_NAME"];
echo"PATH". $path ."";
?>
<Table border="1">
    <TR>
        <TD>Key</TD>
        <TD>Value</TD>
    </TR>
    <?php
    foreach ($_SERVER as $key => $value) {
        echo "<TR><TD>" . $key . "</TD>";
        echo "<TD>" . $value . "</TD></TR>";
    }
    ?>
</Table>