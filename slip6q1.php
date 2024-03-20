<!-- Q1. Write a PHP script to check whether accepted number is prime or not. [10 Marks]  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <H1>Prime Number</H1>
    <form action="slip6q1.php" method="POST">
        <label for="num">Enter any number</label>
        <input type="text" name="num" id="num">
        <input type="submit" value="Submit">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $num=$_POST['num'];
        $count=0;
        for ($i=1; $i<=$num ; $i++) { 
           if($num%$i==0)
           {
            $count++;
           }
        }
        if($count==2)
        {
            echo"Given number is prime";
        }
        else{
            echo"Given number is not prime";
        }
    }
    
    ?>
</body>
</html>
