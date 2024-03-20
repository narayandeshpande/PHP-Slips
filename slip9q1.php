<!-- Q1. Write a PHP script to print following floyd’s triangle. 
1 
2 3  
4 5 6  
7 8 9 10  -->
<?php
$count=1;
for ($i=1; $i <=4; $i++) { 
    for($j=1;$j<=$i;$j++)
    {
        echo$count;
        $count++;
    }
    echo"<br>";
}

?>