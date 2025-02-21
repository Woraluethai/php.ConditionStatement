<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณ BMI</title>
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
            color:rgb(112, 236, 94);
            text-align: center;
        }
        label {
            font-size: 1.1em;
            margin-bottom: 10px;
            display: block;
            font-weight: bold;
            color: #333;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box; /* ทำให้ input ขยายตามความกว้างของ container */
        }
        button {
            padding: 10px 20px;
            background-color:rgb(225, 101, 73);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            width: 100%;
        }
        button:hover {
            background-color:rgb(227, 72, 212);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>โปรแกรมคำนวณค่า BMI</h1>
    <form action="calculate.php" method="post">
        <label for="fname">ชื่อ:</label>
        <input type="text" id="fname" name="fname" required>

        <label for="lname">นามสกุล:</label>
        <input type="text" id="lname" name="lname" required>

        <label for="age">อายุ:</label>
        <input type="number" id="age" name="age" required>

        <label for="weight">น้ำหนัก (กิโลกรัม):</label>
        <input type="number" id="weight" name="weight" required>

        <label for="height">ส่วนสูง (เซนติเมตร):</label>
        <input type="number" id="height" name="height" required>

        <button type="submit" name="submit">คำนวณ BMI</button>
    </form>
</div>

</body>
</html>
