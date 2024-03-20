<!-- Q2. Write a PHP script for the following: Design a form to accept the details of 5 different 
items, such as item code, item name, units sold, rate. Display the bill in the tabular format. 
Use only 4 text boxes. (Hint : Use of explode function.)  -->
<!DOCTYPE html>
<html>
<head>
    <title>Item Billing System</title>
</head>
<body>

<h2>Item Billing System</h2>

<form method="post" action="slip3q2.php">
    <table>
        <tr>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Units Sold</th>
            <th>Rate</th>
        </tr>
        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Process each item's details
            for ($i = 1; $i <= 5; $i++) {
                // Get input from the textboxes
                $input = explode(",", $_POST["item$i"]);

                // Display the item details in a table row
                echo "<tr>";
                foreach ($input as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
        }
        ?>
    </table>

    <input type="submit" value="Generate Bill">
</form>

</body>
</html>
