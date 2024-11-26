<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>ทดสอบส่งค่าโดยใช้ Medthod GET</title>
</head>
<body>
    <h2>ทดสอบรับค่าจาก medthod GET(ผ่าน URL)</h2>
    <?php
    echo "ศึกษาเรื่อง :".$_GET['subject']." ได้ที่ ". $_GET['web'];
    ?>
</body>
</html>