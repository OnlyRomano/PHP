<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 9</title>
    <style>
        body{
            font-family: consolas;
            padding: 10px;
            margin: 20px;
            font-weight: bold;
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        form{
            display: inline-block;
            text-align: right;
        }

        div{
            background-color: whitesmoke;
            padding: 15px;
            margin: auto;
            border-radius: 10px;
            width: fit-content;
            box-shadow: 0px 2px 5px rgba(0,0,0,2);
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
    <h2>Triangle</h2>
    <form action="" method="GET">
        SideA: <Input type="text" name = "txtsideA"> <br>
        SideB: <Input type="text" name = "txtsideB"> <br>
        SideC: <Input type="text" name = "txtsideC"> <br>
        Height: <Input type="text" name = "txtheight"> <br>

        <input type="submit" name="btnArea" value="Area">
        <input type="submit" name="btnPerimeter"  value="Perimeter">
        
    </form>
</body>
</html>
<?php
    $errorCount = 0;
    function validateNum1(){
        if (empty($_GET['txtsideA'])) {
            echo "<font color='red'><br>Side A is empty</font>";
            $errorNum1 = 1;
        } else if (!is_numeric($_GET['txtsideA'])) {
            echo "<font color='red'><br>Side A is not numeric</font>";
            $errorNum1 = 1;
        } else if ($_GET['txtsideA'] < 1 || $_GET['txtsideA'] > 100) {
            echo "<font color='red'><br>Side A should be between 1 and 100</font>";
            $errorNum1 = 1;
        } else {
            $errorNum1 = 0;
        }
        return $errorNum1;;
    }
    function validateNum2(){
        if(empty($_GET['txtsideB'])){
            echo "<font color = 'red'><br>side B is empty</font>";
            $errorNum2 = 1;
        }
        else if(!is_numeric($_GET['txtsideB'])){
            echo "<font color = 'red'><br>side B is not numeric</font>";
            $errorNum2 = 1;
        }
        else if ($_GET['txtsideB'] < 1 || $_GET['txtsideB'] > 100) {
            echo "<font color='red'><br>Side B should be between 1 and 100</font>";
            $errorNum2 = 1;
        }
        else{
            $errorNum2 = 0;
        }
        return $errorNum2;
    }

    function validateNum3(){
        if (empty($_GET['txtsideC'])) {
            echo "<font color='red'><br>Side C is empty</font>";
            $errorNum3 = 1;
        } 
        else if (!is_numeric($_GET['txtsideC'])) {
            echo "<font color='red'><br>Side C is not numeric</font>";
            $errorNum3 = 1;
        } 
        else if ($_GET['txtsideC'] < 1 || $_GET['txtsideC'] > 100) {
            echo "<font color='red'><br>Side C should be between 1 and 100</font>";
            $errorNum3 = 1;
        } 
        else if ($_GET['txtsideC'] <= $_GET['txtsideA'] || $_GET['txtsideC'] <= $_GET['txtsideB']) {
            echo "<font color='red'><br>Side C should be larger than Side A and Side B</font>";
            $errorNum3 = 1;
        } 
        else {
            $errorNum3 = 0;
        }
        return $errorNum3;
    }

    function validateNum4() {
        if (empty($_GET['txtheight'])) {
            echo "<font color='red'><br>Height is empty</font>";
            $errorheight = 1;
        } else if (!is_numeric($_GET['txtheight'])) {
            echo "<font color='red'><br>Height is not numeric</font>";
            $errorheight = 1;
        } else if ($_GET['txtheight'] < 1 || $_GET['txtheight'] > 100) {
            echo "<font color='red'><br>Height should be between 1 and 100</font>";
            $errorheight = 1;
        } else {
            $errorheight = 0;
        }
        return $errorheight;
    }

    if(isset($_GET['btnArea'])){
        $errorCount += validateNum2();
        $errorCount += validateNum4();

        if($errorCount == 0){
            $sideB = $_GET['txtsideB'];
            $height = $_GET['txtheight'];
        
            $area = ($sideB * $height) / 2;
        
            echo "<br>Area = ", $area;
        }
    }
    
    if(isset($_GET['btnPerimeter'])){
        $errorCount += validateNum1();
        $errorCount += validateNum2();
        $errorCount += validateNum3();

        if($errorCount == 0){
            $sideA = $_GET['txtsideA'];
            $sideB = $_GET['txtsideB'];
            $sideC = $_GET['txtsideC'];
        
            $Perimeter = $sideA + $sideB + $sideC; 
        
            echo "<br>Perimeter = " , $Perimeter;
        }
    }
?>
</div>