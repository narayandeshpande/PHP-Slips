<!-- Q1. Design a HTML form to accept a string. Write a php function to reverse a string.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String reverse</title>
</head>
<body>
    <h1>String Reverse</h1>
    <form action="slip7q1.php" method="GET">
        <label for="str">Enter your string</label>
        <input type="text" name="str" id="str">
        <input type="submit" value="Submit">
    </form>
    <?php
    function rev($str)
    {
        $strr=strrev($str);
        echo"Orignal string is: $str<br>";
        echo"Reverse string is:$strr";
    }
    $str=$_GET['str'];
    // echo"$str";
    rev($str);

    
    ?>
</body>
</html>