<!-- Q2. Write a menu driven program to perform the following queue related operations 
a) Insert an element in queue 
b) Delete an element from queue 
c) Display the contents of queue  -->
<?php
$a=array(1,2,3,4,5,6,7,8,9,10);
print_r($a);
echo"<br>";
array_shift($a);
print_r($a);
echo"<br>";
array_unshift($a,11);
print_r($a);
echo"<br>";
?>