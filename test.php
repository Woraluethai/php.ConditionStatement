<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ทดสอบส่งค่าโดยใช้ Method POST</title>
</head>
<body>
    <h2>ทดสอบรับค่าจาก method POST</h2>

    <!-- ฟอร์มเพื่อรับข้อมูล -->
    <form method="POST" action="">
        <label for="subject">ศึกษาเรื่อง:</label>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="web">ได้ที่:</label>
        <input type="text" id="web" name="web" required><br><br>

        <input type="submit" value="ส่งข้อมูล">
    </form>

    <hr>

    <?php
    // ตรวจสอบว่า request เป็น POST หรือไม่
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // รับค่าจากฟอร์ม
        $subject = $_POST['subject'];
        $web = $_POST['web'];

        // แสดงค่าที่รับมา
        echo "ศึกษาเรื่อง: " . htmlspecialchars($subject) . " ได้ที่ " . htmlspecialchars($web);
    }
    ?>
</body>
</html>
