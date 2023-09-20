<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTMK form: Checkbox</title>
    <style>
        body{
            background-color: lightcoral;
        }
    </style>
</head>
<body>
<h1>
            <font color = "red">
                <?php echo "Program 7 <br>"?>
            </font>
        </h1>
        <h3>
            <center>
                <font color = "blue"> 
                    <?php echo "Description: This Program shows on how to use Checkbox in an HTML form"; ?>
                </font>
            </center>
        </h3>
</h1>
<form action="" method="GET">
    Input Number: <Input type="text" name = "txtfno"> <br>
    Input Number: <Input type="text" name = "txtsno"> <br>

    <input type="checkbox" name="cbAdd"> Add <br>
    <input type="checkbox" name="cbSubtract" >Subtract<br>
    <input type="checkbox" name="cbMultiply">Multiply <br>
    <input type="checkbox" name="cbdivide"> Divide <br>
    <input type="submit" name="btnSubmit" value = "Submit">
</form>
</body>
</html>
<?php
if(isset($_GET['btnSubmit'])){
    $num1 = $_GET['txtfno'];
    $num2 = $_GET['txtsno'];

    $msg = "First Number: ". $num1 . "<br>Second Number: ". $num2;

    if(isset($_GET['cbAdd'])){
        $sum = $num1 + $num2;
        $msg .= "<br>Sum: ". $sum;
    }

    if(isset($_GET['cbSubtract'])){
        $difference = $num1 - $num2;
        $msg .= "<br>Difference: ". $difference;
    }

    if(isset($_GET['cbMultiply'])){
        $Product = $num1 * $num2;
        $msg .= "<br>Product: ". $Product;
    }

    if(isset($_GET['cbdivide'])){
        $quotient = $num1 / $num2;
        $msg .= "<br>Quotient: ". $quotient;
    }

    echo $msg;
}
?>