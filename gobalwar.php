<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Global Varible</h1>
    <?php
    $x = 75;
    echo "ค่าของ x==>".$x;

    function myfunction(){
        echo "อ่านจาก function ค่าของ ป==>".$x;
    }

    myfunction();

    echo "<hr>";
    ?>
</body>
</html>