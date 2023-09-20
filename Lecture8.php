<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTMK form: Select Option</title>
    <style>
        body{
            background-color: lightgoldenrodyellow;
        }
    </style>
</head>
<body>
<h1>
            <font color = "red">
                <?php echo "Program 8 <br>"?>
            </font>
        </h1>
        <h3>
            <center>
                <font color = "blue"> 
                    <?php echo "Description: This Program shows on how to use Select Option in an HTML form"; ?>
                </font>
            </center>
        </h3>
</h1>
<form action="" method="GET">
    Input Number: <Input type="text" name = "txtfno"> <br>
    Input Number: <Input type="text" name = "txtsno"> <br>
    Select Operatio:
    <select name="Operation">
        <option value="NoOperation">---Select Here---</option>
        <option value="Sum">Add</option>
        <option value="Difference">Subtract</option>
        <option value="Product">Multiply</option>
        <option value="Quotient">Divide</option>
    </select><br>
    <input type="submit" name="btnSubmit" value = "Submit">
</form>
</body>
</html>
<?php
if(isset($_GET['btnSubmit'])){
    $num1 = $_GET['txtfno'];
    $num2 = $_GET['txtsno'];

    $operation = $_GET['Operation'];

    if($operation == "Sum"){
        $result = $num1 + $num2;
    }

    else if ($operation == "Difference"){
        $result = $num1 - $num2;
    }

    else if ($operation == "Product") {
        $result = $num1 * $num2;
    }
    else if ($operation == "Quotient") {
        $result = $num1 / $num2;
    }

    else{
        $result = 0;
    }

    echo "First Number: ", $num1;
    echo "<br>Secon Number: ", $num2;
    echo "<br>", $operation;
    echo ":", $result;
}
?>