<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Calculator</title>
    <Style>
        body{
           font-family: Georgia, 'Times New Roman', Times, serif;
           background-color: palevioletred;
        }
        .container{
            display: inline-block;
            text-align: right;
        }


    </Style>
</head>
<body>
    <div class="container">
    <h1>Triangle Calculator</h1>
        <form action="" method="GET">
            Input Base: <Input type="text" name = "base"> <br>
            Input Adjacent: <Input type="text" name = "Adjacent"> <br>
            Input Hypotenuse: <Input type="text" name = "Hypotenuse"> <br>
            Input Height: <Input type="text" name = "height"> <br>

            <input type="submit" name="btncalculate" value="calculate">
        </form>
    </div>
</body>
</html>
<?php
    if (isset($_GET['btncalculate'])) {
        $base = $_GET['base'];
        $adjacent = $_GET['Adjacent'];
        $hypotenuse = $_GET['Hypotenuse'];
        $height = $_GET['height'];

        $area = ($base * $height) / 2;
        $perimeter = $base + $adjacent + $hypotenuse;

        echo "<br>Adjacent: ", $adjacent;
        echo "<br>Base: ", $base;
        echo "<br>Height: ", $height;
        echo "<br>Hypotenuse: ", $hypotenuse;
        echo "<br>area: ", $area;
        echo "<br>perimeter: ", $perimeter; 
    }
?>
