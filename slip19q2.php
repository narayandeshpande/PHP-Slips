<!-- Q2. Write a menu driven program to perform the following stack related operations. 
a) Insert an element in stack. 
b) Delete an element from stack.[Hint: array_push(), array_pop()]  -->
<?php
$a=array(1,2,3,4,5,6,7,8,9,10);
print_r($a);
array_push($a,11);
print_r($a);
$b=array_pop($a);
echo $b;
print_r($a);
?>