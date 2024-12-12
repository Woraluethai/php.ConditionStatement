<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BMI Calculator Form</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: lightblue; /* ฟ้าครามอ่อน */
                margin: 0;
                padding: 20px;
                color: #333; /* สีข้อความหลัก */
            }
            .container {
                max-width: 500px;
                margin: 0 auto;
                background: #fff8e1; /* สีพื้นหลังเหลืองอ่อน */
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                border: 1px solid #ddd; /* เส้นขอบเบาๆ */
            }
            h1 {
                text-align: center;
                color: #2e3d49; /* สีหัวข้อเข้ม */
                font-size: 24px;
            }
            label {
                display: block;
                margin-bottom: 8px;
                font-weight: bold;
                color: #444; /* สีของ label */
            }
            input[type="text"],
            input[type="number"] {
                width: 100%;
                padding: 12px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
                box-sizing: border-box;
            }
            input[type="text"]:focus,
            input[type="number"]:focus {
                border-color: #007BFF; /* เมื่อฟิลด์กรอกข้อมูลเลือกอยู่ */
                outline: none;
            }
            button {
                display: block;
                width: 100%;
                padding: 12px;
                background: #4CAF50; /* สีเขียวสดใส */
                color: white;
                border: none;
                border-radius: 5px;
                font-size: 18px;
                cursor: pointer;
            }
            button:hover {
                background: #45a049; /* เมื่อเมาส์ hover ปุ่ม */
            }
            button:active {
                background: #388e3c; /* เมื่อคลิกปุ่ม */
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
