<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTMK form: Radio button</title>
    <style>
        body{
            background-color: lightgreen;
        }
    </style>
</head>
<body>
<h1>
            <font color = "red">
                <?php echo "Program 6 <br>"?>
            </font>
        </h1>
        <h3>
            <center>
                <font color = "blue"> 
                    <?php echo "Description: This Program shows on how to use Radiobutton in an HTML form"; ?>
                </font>
            </center>
        </h3>
</h1>
<form action="" method="POST">
    Input Number: <Input type="text" name = "txtfno"> <br>
    Input Number: <Input type="text" name = "txtsno"> <br>

    <input type="radio" name="rbmdas" value = "sum"> Add <br>
    <input type="radio" name="rbmdas" value = "Difference">Subtract<br>
    <input type="radio" name="rbmdas" value="Product">Multiply <br>
    <input type="radio" name="rbmdas" value = "quotient" > Divide <br>
    <input type="submit" name="btnSubmit" value = "Submit">
</form>
</body>
</html>
<?php
if(isset($_POST['btnSubmit'])){
    $num1 = $_POST['txtfno'];
    $num2 = $_POST['txtsno'];

    $operation = $_POST['rbmdas'];

    if($operation == "sum"){
        $result = $num1 + $num2;
    }

    else if ($operation == "Difference"){
        $result = $num1 - $num2;
    }

    elseif ($operation == "Product") {
        $result = $num1 * $num2;
    }
    elseif ($operation == "quotient") {
        $result = $num1 / $num2;
    }

    echo "First Number: ", $num1;
    echo "<br>Secon Number: ", $num2;
    echo "<br>", $operation;
    echo ":", $result;
}
?>