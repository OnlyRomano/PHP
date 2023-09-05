<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
    <style>
        body{
            background-color: tomato;
        }
            h1{
                text-align: center;
            }
    </style>
</head>
<body>
    <?php
    // Student information
    $studentNumber = "123456789";
    $studentName = "John Doe";
    $course = "Computer Science";
    $yearLevel = "3rd Year";
    $section = "Section A";
    $birthYear = 1998;
    
    // Get the current year
    $currentYear = date("Y");
    
    // Calculate age
    $age = $currentYear - $birthYear;
    ?>

    <h1>Student Information</h1>
    <p><strong>Student Number:</strong> <?php echo $studentNumber; ?></p>
    <p><strong>Name:</strong> <?php echo $studentName; ?></p>
    <p><strong>Course:</strong> <?php echo $course; ?></p>
    <p><strong>Year Level:</strong> <?php echo $yearLevel; ?></p>
    <p><strong>Section:</strong> <?php echo $section; ?></p>
    <p><strong>Year Today:</strong> <?php echo $currentYear; ?></p>
    <p><strong>Birth Year:</strong> <?php echo $birthYear; ?></p>
    <p><strong>Age:</strong> <?php echo $age; ?></p>
</body>
</html>