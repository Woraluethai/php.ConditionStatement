<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>แสดงผลการคำนวณพื้นที่รูปเรขาคณิต</title>
</head>
<body>
    <h2>พื้นที่รูปสามเหลี่ยม</h2>

    <?php
        // ตรวจสอบว่าได้ส่งข้อมูลมาหรือไม่
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // รับค่าความสูงและความยาวฐานจากฟอร์ม
            $height = $_POST['height'];
            $width = $_POST['width'];

            // ตรวจสอบว่าค่าที่รับมาคือค่าที่เป็นตัวเลขและไม่เป็นค่าว่าง
            if (is_numeric($height) && is_numeric($width) && $height > 0 && $width > 0) {
                // คำนวณพื้นที่
                $area = 0.5 * $height * $width;
                
                // แสดงผล
                echo "<h3>รูปสามเหลี่ยมที่มีความสูง $height และมีความยาวฐาน $width</h3>";
                echo "<br><br>";
                echo "<h3>คำนวณพื้นที่ได้ $area ตารางหน่วย</h3>";
            } else {
                echo "<h3>กรุณากรอกค่าความสูงและความยาวฐานเป็นตัวเลขที่มากกว่าศูนย์</h3>";
            }
        }
    ?>

    <!-- ฟอร์มสำหรับกรอกข้อมูล -->
    <form method="POST" action="">
        ความสูง: <input type="text" name="height"><br><br>
        ความยาวฐาน: <input type="text" name="width"><br><br>
        <input type="submit" value="คำนวณ">
    </form>

</body>
</html>
