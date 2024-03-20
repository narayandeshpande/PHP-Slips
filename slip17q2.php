<!-- Q2. Declare array. Reverse the order of elements, making the first element last and last 
element first and similarly rearranging other array elements.[Hint : array_reverse()]  -->
<?php
$a=array(1,2,3,4,5,6,7);
$b=array_reverse($a);
for ($i=0; $i < count($b); $i++) { 
    echo"$b[$i]<br>";
}

?>