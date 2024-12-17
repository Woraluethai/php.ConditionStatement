<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณค่า BMI</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #F0E68C; /* สีพื้นหลังเหลืองอ่อน */
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #FFFFFF; /* พื้นหลังกล่องเป็นสีขาว */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #FF6347; /* สีแดงส้ม */
        }
        p {
            font-size: 18px;
            color: #333;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #4CAF50; /* สีเขียวสดใส */
            font-weight: bold;
        }
        a:hover {
            color: #388e3c; /* สีเขียวเข้มเมื่อ hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ผลการคำนวณค่า BMI</h1>
        <?php
            // ฟังก์ชันคำนวณค่า BMI
            function calculateBMI($weight, $height_cm) {
                $height_m = $height_cm / 100; // แปลงส่วนสูงจากเซนติเมตรเป็นเมตร
                return $weight / ($height_m ** 2); // คำนวณค่า BMI
            }

            // ฟังก์ชันแปลผลค่า BMI
            function interpretBMI($bmi) {
                if ($bmi < 18.5) {
                    return "น้ำหนักต่ำกว่าเกณฑ์";
                } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                    return "น้ำหนักปกติ";
                } elseif ($bmi >= 25 && $bmi < 29.9) {
                    return "น้ำหนักเกิน";
                } else {
                    return "โรคอ้วน";
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // รับค่าจากฟอร์ม
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $age = $_POST['age'];
                $weight = $_POST['weight'];
                $height_cm = $_POST['height'];

                // คำนวณ BMI โดยเรียกใช้ฟังก์ชัน calculateBMI
                $bmi = calculateBMI($weight, $height_cm);

                // แปลผลค่า BMI โดยเรียกใช้ฟังก์ชัน interpretBMI
                $category = interpretBMI($bmi);

                // แสดงผลลัพธ์
                echo "<p>ชื่อ: <strong>" . htmlspecialchars($first_name) . " " . htmlspecialchars($last_name) . "</strong></p>";
                echo "<p>อายุ: <strong>" . htmlspecialchars($age) . " ปี</strong></p>";
                echo "<p>น้ำหนัก: <strong>" . htmlspecialchars($weight) . " กิโลกรัม</strong></p>";
                echo "<p>ส่วนสูง: <strong>" . htmlspecialchars($height_cm) . " เซนติเมตร</strong></p>";
                echo "<p>ค่า BMI: <strong>" . number_format($bmi, 2) . "</strong></p>";
                echo "<p>หมวดหมู่: <strong>" . $category . "</strong></p>";
            } else {
                echo "<p>ไม่มีข้อมูลที่ส่งมา กรุณากลับไปที่ <a href='bmi_form.php'>ฟอร์ม</a></p>";
            }
        ?>
        <a href="bmi_form.php">กลับไปกรอกข้อมูลใหม่</a>
    </div>
</body>
</html>
