<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = $_POST['name'];
    $nickname = $_POST['nickname'];

    // ข้อมูลที่จะบันทึก
    $studentData = "ชื่อ: $name, ชื่อเล่น: $nickname\n";

    // บันทึกข้อมูลลงไฟล์
    file_put_contents('student.txt', $studentData, FILE_APPEND);

    // ข้อความที่จะแสดงเมื่อบันทึกข้อมูลแล้ว
    $message = "ข้อมูลที่บันทึก:\nชื่อ: $name\nชื่อเล่น: $nickname";
} else {
    $message = "";
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มบันทึกข้อมูลนักเรียน</title>
</head>
<body>
    <h1>ฟอร์มบันทึกข้อมูลนักเรียน</h1>

    <!-- ฟอร์มสำหรับกรอกข้อมูล -->
    <form method="POST" action="">
        <label for="name">ชื่อ:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="nickname">ชื่อเล่น:</label><br>
        <input type="text" id="nickname" name="nickname" required><br><br>

        <button type="submit">Submit</button>
    </form>

    <h2>ผลการบันทึกข้อมูล</h2>
    <pre><?php echo $message; ?></pre>

    <h2>ข้อมูลนักเรียนที่บันทึก</h2>
    <?php
    // อ่านข้อมูลจากไฟล์
    if (file_exists('student.txt')) {
        $myfile = fopen("student.txt", "r") or die("Unable to open file!");
        // อ่านข้อมูลจากไฟล์และแสดง
        while(!feof($myfile)) {
            echo nl2br(fgets($myfile)); // ใช้ nl2br() เพื่อแปลง newline ในไฟล์เป็น <br> ใน HTML
        }
        fclose($myfile);
    } else {
        echo "ยังไม่มีข้อมูลนักเรียน";
    }
    ?>
</body>
</html>
