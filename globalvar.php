<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Global Variable</h1>
    <?php
    $x = 75;
    echo "ค่าของ x ==> " . $x;

    function myfunction(){
        echo "อ่านจาก function ค่าของ x ==> " . $GLOBALS['x'];  // ใช้ $GLOBALS เพื่อเข้าถึงตัวแปร global
    }

    myfunction();

    echo "<hr>";
    ?>
</body>
</html>
