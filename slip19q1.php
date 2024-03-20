<!--  
Q1. Write a PHP script to print following floyd’s triangle. 
A 
B C 
D E F 
G H I J  -->
<?php
$count='A';
for ($i=1; $i <=4; $i++) { 
    for($j=1;$j<=$i;$j++)
    {
        echo$count;
        $count++;
    }
    echo"<br>";
}

?>