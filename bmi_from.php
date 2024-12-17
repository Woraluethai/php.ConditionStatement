<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #FFFAF0; /* สีพื้นหลังครีมอ่อน */
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
        }
        h1 {
            text-align: center;
            color: #FF6347; /* สีแดงส้ม */
            font-size: 30px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #FF6347; /* ขอบช่องกรอกข้อมูลเป็นสีแดงส้ม */
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            background-color: #FFF0F5; /* พื้นหลังช่องกรอกข้อมูล */
        }
        input[type="text"]:focus, input[type="number"]:focus {
            border-color: #4CAF50; /* สีขอบเมื่อกรอกข้อมูล */
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #4CAF50; /* สีเขียวสดใส */
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
        }
        button:hover {
            background: #45a049; /* สีเมื่อ hover ปุ่ม */
        }
        button:active {
            background: #388e3c; /* สีเมื่อคลิกปุ่ม */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>คำนวณค่า BMI</h1>
        <form action="bmi_result.php" method="POST">
            <label for="first_name">ชื่อ:</label>
            <input type="text" name="first_name" id="first_name" placeholder="กรอกชื่อ" required>
            
            <label for="last_name">นามสกุล:</label>
            <input type="text" name="last_name" id="last_name" placeholder="กรอกนามสกุล" required>
            
            <label for="age">อายุ:</label>
            <input type="number" name="age" id="age" placeholder="กรอกอายุ" min="0" required>
            
            <label for="weight">น้ำหนัก (กิโลกรัม):</label>
            <input type="number" name="weight" id="weight" placeholder="กรอกน้ำหนัก" min="0" step="any" required>
            
            <label for="height">ส่วนสูง (เซนติเมตร):</label>
            <input type="number" name="height" id="height" placeholder="กรอกส่วนสูง" min="0" step="any" required>
            
            <button type="submit">คำนวณค่า BMI</button>
        </form>
    </div>
</body>
</html>
