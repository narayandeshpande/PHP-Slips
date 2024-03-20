<!--  
Q1. Design a HTML form to accept a string. Write a PHP function that checks whether a 
passed string is a palindrome or not?  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String palindrome</title>
</head>
<body>
    <h1>String palindrome</h1>
    <form action="slip8q1.php" method="GET">
        <label for="str">Enter your string</label>
        <input type="text" name="str" id="str">
        <input type="submit" value="Submit">
    </form>
    <?php
    function rev($str)
    {
        $strr=strrev($str);
        if($strr==$str)
        {
            echo"Given string is palindrome<br>";
        }
        else
        {
            echo"Given string is not palindrome<br>";

        }
    }
    $str=$_GET['str'];
    // echo"$str";
    rev($str);