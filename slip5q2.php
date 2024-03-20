 <!-- Q2. Write a menu driven program to perform the following operations on an associative 
array: 
a) Display the elements of an array along with the keys. 
b) Display the size of an array  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Enter your choice</h1>
    <form action="" method="POST" action="slip5q2.php">
        <h3>Enter one for Display the elements of an array along with the keys</h3>
        <h3>Enter two for Display the size of an array</h3>
        <input type="text" name='ch' id="ch">
        <input type="submit" value="Submit">
    </form>
    <?php
    $arr=array("name"=>"Narayan","Age"=>20,"Class"=>"SYBCA","College"=>"MIT ACSC");
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $ch=$_POST['ch'];
        if($ch==1)
        {
            foreach($arr as $key => $value)
            {
                echo"Key:$key value:$value<br>";
            }
        }
        elseif($ch==2)
        {
            $len=count($arr);
            echo"Length of array is: $len<br>";
        }
        else{
            echo"Invalid input";
        }
    }
    
    ?>
</body>
</html>