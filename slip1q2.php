<!-- Q2. Design a HTML form to accept a string. Write a PHP script for the following. 
a) Write a function to count the total number of Vowels from the script. 
b) Show the occurrences of each Vowel from the script.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip 1 Q2</title>
</head>
<body>
    <h1>Count number of vowels</h1>
    <form action="slip1q2.php" method="POST">
        <label for="str">Enter your String</label>
        <input type="text" name="str" id="str">
        <input type="submit" value="Submit">
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $str=$_POST['str'];
        $volel=0;
        for ($i=0; $i < strlen($str); $i++) { 
        if($str[$i]=='a' || $str[$i]=='A' || $str[$i]=='e' || $str[$i]=='E' || $str[$i]=='i' || $str[$i]=='I' || $str[$i]=='o'
        || $str[$i]=='O' || $str[$i]=='u' || $str[$i]=='U')
            {
                echo"occurrences of vowel  $str[$i] is  : $i<br>";
                $volel++;
            }
        }
        echo"Number of vowels is $volel <br> ";
    }
    
    ?>
</body>
</html>