<!-- Q1. Write a PHP script to declare three variables and print maximum among them.  -->
<?php
$a=10;
$b=77;
$c=99;
if($a>$b && $a>$c)
{
    echo"A is Max<br>";
}
elseif ($b>$a && $b>$c) {
    echo"B is Max<br>";
}
else
{
    echo"C is Max";
}

?>