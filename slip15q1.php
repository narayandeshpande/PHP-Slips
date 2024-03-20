<!-- Q1. Write a PHP script to check number 153 is Armstrong or not.  -->
<?php
$num=153;
$n=$num;
$sum=0;
while ($n!=0) {
    $d=$n%10;
    $sum+=$d**3;
    $n=(int)$n/10;
}
if($num==$sum)
{
    echo"yes";
}
else
{
    echo"no";
}

?>