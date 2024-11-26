<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>แสดงผลการคำนวณพื้นที่รูปเรขาคณิต</title>
</head>
<body>
    <h2>พื้นที่รูปสามเหลี่ยม</h2>
    <?php
        $height = $_POST['height']; //รับค่าความสูงสามเหลี่ยม
        $width = $_POST['width'];//รับค่าความยาวฐาน จากฟอร์มที่ส่งมา
        $area 0.5*$height*$width;
        echo "<h3>รูปสามเหลี่ยมที่มีความสูง $height และมีความยาวฐาน $width<h3>";
        echo "<br><br>";
        echo "<h3>คำนวณพื้นที่ได้ $area ตารางหน่วย</h3>";
    ?>
</body>
</html

