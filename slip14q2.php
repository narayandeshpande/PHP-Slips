<!-- Q2. Write a PHP script for the following: Design a form to accept two strings. Compare the 
two strings using both methods (= = operator & strcmp function). Append second string to 
the first string. Accept the position from the user; from where the characters from the first 
string are reversed. (Use radio buttons)  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>

<body>
    <h1>String Methods</h1>
    <form action="slip4q2.php" method="POST">
        <label for="fstring">Enter your first string</label>
        <input type="text" name="fstring" id="fstring"><br>

        <label for="sstring">Enter your second string</label>
        <input type="text" name="sstring" id="sstring"><br>

        <label for="index">Enter your index</label>
        <input type="text" name="index" id="index"><br>

        <h3>Select your chooise</h3>
        <label for="com">Compare both the strings</label>
        <input type="radio" name="ch" id="com" value="1">

        <label for="com1">Append second string to the first string </label>
        <input type="radio" name="ch" id="com1" value="2">

        <label for="com2">Enter index </label>
        <input type="radio" name="ch" id="com2" value="3"><br>
        <input type="submit" value="Submit">
    </form>
    <?php
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $str1=$_POST['fstring'];
    $str2=$_POST['sstring'];
    $ch=$_POST['ch'];
    $in=$_POST['index'];
    if($ch==1)
    {
        if($str1==$str2)
        {
            echo"Two strings is same<br>";
        }
        else
        {
            echo"Two strings is not same<br>";
        }
    }
    elseif($ch==2)
    {
        $con=$str1 ." " . $str2;
        echo"Strings after append: $con<br>";
    }

    elseif($ch==3)
    {
        $rev=strrev($str1);

        echo"Charecter at given index is : $rev[$in]<br>";
    }
  }
  ?>
</body>
</html>