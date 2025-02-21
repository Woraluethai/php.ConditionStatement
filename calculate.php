<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์การคำนวณ BMI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            text-align: left; /* ทำให้ข้อความชิดซ้าย */
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #ddd;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color:rgb(119, 213, 119);
            text-align: center;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
        }
        .back-link {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-link:hover {
            background-color:rgb(209, 144, 104);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>ผลลัพธ์การคำนวณ BMI</h1>

    <?php
    if (isset($_POST['submit'])) {
        // รับข้อมูลจากฟอร์ม
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];

        // แปลงส่วนสูงจากเซนติเมตรเป็นเมตร
        $height_m = $height / 100;

        // คำนวณ BMI
        $bmi = $weight / ($height_m * $height_m);

        // แปลผล BMI
        if ($bmi < 18.5) {
            $result = "น้ำหนักต่ำกว่าเกณฑ์";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            $result = "น้ำหนักปกติ";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            $result = "น้ำหนักเกิน";
        } else {
            $result = "อ้วน";
        }

        // แสดงผล
        echo "<div class='result'>";
        echo "<h2>ข้อมูลผู้ใช้</h2>";
        echo "<p>ชื่อ: $fname $lname</p>";
        echo "<p>อายุ: $age ปี</p>";
        echo "<p>น้ำหนัก: $weight กิโลกรัม</p>";
        echo "<p>ส่วนสูง: $height เซนติเมตร</p>";
        echo "<p>BMI: " . number_format($bmi, 2) . "</p>";
        echo "<p>คำแนะนำ: $result</p>";
        echo "</div>";

        // ลิงค์กลับไปหน้าแรก
        echo "<a href='index.php' class='back-link'>กลับไปยังหน้าแรก</a>";
    }
    ?>
</div>

</body>
</html>
