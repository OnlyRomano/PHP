<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
    <style>
        body{
            font-family: consolas;
            padding: 10px;
            margin: 20px;
            line-height: 2.8;
            font-weight: bold;
            background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
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
    <?php
        $studentNumber = "22 - 00987";
        $name = "Jhun Mark M. Romano";
        $course = "Bachelor Of Science in Computer Science";
        $year = "2nd Year";
        $section = "2C";
        
        $currentyear = date("Y");
        $birth = "2002";
        $age = $currentyear - $birth;
    
    ?>

    <div>
    <h2>Student Information</h2>
        <?php
            echo "Student Number: ", $studentNumber;
            echo "<br> Name: ", $name;
            echo "<br> Course: ", $course;
            echo "<br> Year Level: ", $year;
            echo "<br> Section: ", $section;
            echo "<br> Year today: ",$currentyear;
            echo "<br> Birth Year: ", $birth;
            echo "<br> Age: ", $age;
        ?>
    </div>
</body>
</html>
