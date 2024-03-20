<!-- Q2. Design a HTML form to accept a string. Write a PHP script for the following. 
a) Write a function to count the total number of Vowels from the script. 
b) Show the occurrences of each Vowel from the script.  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowels</title>
</head>

<body>
    <h1>Count Vowel</h1>
    <form action="slip11q2.php" method="GET">
        <label for="str">Enter your String</label>
        <input type="text" name="str" id="str">
        <input type="submit" value="Submit">
    </form>
    <?php
    $str=$_GET['str'];
    function countVowel($str)
    {
        $count=strlen($str);
        $vowel=0;
        for ($i=0; $i < $count; $i++) { 
            if($str[$i]=='a' || $str[$i]=='A' ||$str[$i]=='e' ||$str[$i]=='E' ||$str[$i]=='i' ||$str[$i]=='I' ||$str[$i]=='o' ||$str[$i]=='O' ||$str[$i]=='u' ||$str[$i]=='U')
            {
                echo"occurrences of:- $str[$i] is $i<br>";
                $vowel++;
            }
        }
        echo"The number of vowels is: $vowel<br>";
        return $vowel;
    }
    countVowel($str);
    
    ?>
</body>

</html>