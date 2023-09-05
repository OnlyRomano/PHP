<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: brown;
        }
    </style>
</head>
<body>
<h1>
            <font color = "red">
                <?php echo "Program 1 <br>"?>
            </font>
        </h1>
        <h3>
            <center>
                <font color = "blue"> 
                    <?php echo "Description: This program show on how to use operators in PHP"; ?>
                </font>
            </center>
        </h3>
        <?php
            $num1 = 10; $num2 = 5;
            $sum = $num1 + $num2;
            $diff = $num1 - $num2;
            $prod = $num1 * $num2;
            $quo = $num1 / $num2;
            
        ?>
        <font color = "white">
        <?php
            echo "Variable num1 contains: ", $num1 , "<br> Variable num2 contains: ", $num2;
            echo "<br> Sum: ", $sum, "<br> Difference: ", $diff , "<br> Product: ", $prod , "<br> Quotient: ", $quo;
            echo "<br> is num1 greater than num2?", ($num1 > $num2);
            echo "<br> is num1 less than num2 ?", ($num1 < $num2);
            echo "<br> is num1 greater than equal num2 ?", ($num1 >= $num2);
            echo "<br> is num1 less than equal num2 ?", ($num1 <= $num2);
            echo "<br> is num1 not equal to num2 ?", ($num1 <> $num2);
        ?>
        </font>
</body>
</html>
