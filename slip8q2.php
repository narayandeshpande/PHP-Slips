<!--  
Q2. Declare a Multidimensional Array. Display specific element from a Multidimensional 
array. Also delete given element from the Multidimensional array.(After each operation 
display array content.)  -->
<?php
function print1($a)
{
    for ($i=0; $i < count($a); $i++) { 
        for($j=0;$j<count($a[$i]);$j++)
        {
            echo $a[$i][$j];
            echo" ";
        }
        echo"<br>";
    }
}
$a=array(array(1,2,3),
         array(4,5,6),
         array(7,8,9));
    //  print1($a);
    echo"Specific elemet in MD array<br>";
    echo $a[2][1];
    

?>