<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 2: for Variable Declaration</title>
    <style>
        body{
            background-color: beige;
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
                    <?php echo "Description: This program show on how to declare Variable in PHP"; ?>
                </font>
            </center>
        </h3>
        <?php
            $num  = 5;
            $pi = 3.1416;
            $letter = 'a';
            $msg = "Hello";
            $boolean = true;
        ?>
        <font color = "green">
        <?php
            echo "Variable num contains: ", $num;
            echo "<br> Variable pi contains: ", $pi;
            echo "<br> Variable Letter contains: ", $letter;
            echo "<br> Variable Message contains: ", $msg;
            echo "<br> Variable boolean contains: ", $boolean;
        ?>
        </font>
</body>
</html>
