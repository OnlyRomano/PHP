<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 9</title>
    <style>
        body{
            background-color: beige;
        }
    </style>
</head>
<body>
    <h1>
        <font color = "red">
            <?php echo "Program 9 <br>"?>
        </font>
    </h1>
        <h3>
            <center>
                <font color = "blue"> 
                    <?php echo "Description: This Program shows on how to validate input data on an HTML form"; ?>
                </font>
            </center>
        </h3>
    </h1>
    <form action="" method="GET">
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
    $errorCount = 0;
    function validateNum1(){
        if(empty($_GET['txtfno'])){
            echo "<font color = 'red'><br>First number is empty</font>";
            $errorNum1 = 1;
        }
        else if(!is_numeric($_GET['txtfno'])){
            echo "<font color = 'red'><br>First number is not numeric</font>";
            $errorNum1 = 1;
        }
        else{
            $errorNum1 = 0;
        }
        return $errorNum1;
    }
    function validateNum2(){
        if(empty($_GET['txtsno'])){
            echo "<font color = 'red'><br>Second number is empty</font>";
            $errorNum2 = 1;
        }
        else if(!is_numeric($_GET['txtsno'])){
            echo "<font color = 'red'><br>Second number is not numeric</font>";
            $errorNum2 = 1;
        }
        else{
            $errorNum2 = 0;
        }
        return $errorNum2;
    }
    if(isset($_GET['btnadd'])){
        $errorCount += validateNum1();
        $errorCount += validateNum2();
        if($errorCount == 0){
            $fno = $_GET['txtfno'];
            $sno = $_GET['txtsno'];
        
            $result = $fno + $sno;
        
            echo "First number: " , $fno , "<br>Second number:" , $sno , "<br>Sum: " , $result;
        }
    }
    if(isset($_GET['btnsubtract'])){
        $errorCount += validateNum1();
        $errorCount += validateNum2();
        if($errorCount == 0){
            $fno = $_GET['txtfno'];
            $sno = $_GET['txtsno'];
        
            $result = $fno - $sno;
        
            echo "First number: " , $fno , "<br>Second number:" , $sno , "<br>Sum: " , $result;
        }
    }
    if(isset($_GET['btnMultiply'])){
        $errorCount += validateNum1();
        $errorCount += validateNum2();
        if($errorCount == 0){
            $fno = $_GET['txtfno'];
            $sno = $_GET['txtsno'];
        
            $result = $fno * $sno;
        
            echo "First number: " , $fno , "<br>Second number:" , $sno , "<br>Sum: " , $result;
        }
    }
    if(isset($_GET['btndivide'])){
        $errorCount += validateNum1();
        $errorCount += validateNum2();
        if($errorCount == 0){
            $fno = $_GET['txtfno'];
            $sno = $_GET['txtsno'];
        
            $result = $fno / $sno;
        
            echo "First number: " , $fno , "<br>Second number:" , $sno , "<br>Sum: " , $result;
        }
    }
?>