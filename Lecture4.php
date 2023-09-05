<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: beige;
        }
    </style>
</head>
<body>
<h1>
            <font color = "red">
                <?php echo "Program 4 <br>"?>
            </font>
        </h1>
        <h3>
            <center>
                <font color = "blue"> 
                    <?php echo "Description: This Program shows on how to use HTML form In PHP POST Method"; ?>
                </font>
            </center>
        </h3>
</h1>
<form action="" method="POST">
    Input Number: <Input type="text" name = "txtfno"> <br>
    Input Number: <Input type="text" name = "txtsno"> <br>

    <input type="submit" name="btnadd" value="add">
    <input type="submit" name="btnsubtract" value="Subtract">
    <input type="submit" name="btnMultiply" value="Multiply">
    <input type="submit" name="btndivide" value="Divide"> 
</form>
</body>
</html>
<?php
    if(isset($_POST['btnadd'])){
        $fno = $_POST['txtfno'];
        $sno = $_POST['txtsno'];

        $result = $fno + $sno;

        echo "First Number: ", $fno , "<br> Second number: " , $sno , "<br>Sum: ", $result;
    }
    if(isset($_POST['btnsubtract'])){
        $fno = $_POST['txtfno'];
        $sno = $_POST['txtsno'];

        $result = $fno - $sno;

        echo "First Number: ", $fno , "<br> Second number: " , $sno , "<br>Difference: ", $result;
    }
    if(isset($_POST['btnMultiply'])){
        $fno = $_POST['txtfno'];
        $sno = $_POST['txtsno'];

        $result = $fno * $sno;

        echo "First Number: ", $fno , "<br> Second number: " , $sno , "<br>Product: ", $result;
    }
    if(isset($_POST['btndivide'])){
        $fno = $_POST['txtfno'];
        $sno = $_POST['txtsno'];

        $result = $fno / $sno;

        echo "First Number: ", $fno , "<br> Second number: " , $sno , "<br>Quotient: ", $result;
    }
?>