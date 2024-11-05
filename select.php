<?php

if(isset($_POST['summit'])) {
$name = $_POST['Na'];
$lastN = $_POST['La'];
$homeNum = $_POST['num'];
$jung = $_POST['pro'];
$aum = $_POST['aum'];
$tum = $_POST['tum'];
$pass = $_POST['pass'];
$phone = $_POST['pho'];
$date = $_POST['date'];


$name2 = $_POST['Na2'];
$lastN2 = $_POST['La2'];
$homeNum2 = $_POST['num2'];
$jung2 = $_POST['pro2'];
$aum2 = $_POST['aum2'];
$tum2 = $_POST['tum2'];
$pass2 = $_POST['pass2'];
$phone2 = $_POST['pho2'];
$date2 = $_POST['date2'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            position: relative; /* Allow absolute positioning of child elements */
            height: 600px; /* Set a height for the body */
        }

        .con {
            border: 2px solid #333;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px; /* Set a fixed width for envelope style */
            position: absolute; /* Allow positioning */
            top: 0; /* Align to the top */
            left: 0; /* Align to the left */
        }

        .recipient {
            border: 2px solid #333;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            position: absolute; /* Allow positioning */
            bottom: 0; /* Align to the bottom */
            right: 0; /* Align to the right */
            width: 400px; /* Same width as the sender */
        }

        h2 {
            text-align: center;
            margin: 10px 0;
        }

        .address {
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        p {
            margin: 5px 0; /* Add margin for paragraph spacing */
        }
    </style>
</head>
<body>

<div class="con">
    <h2>ผู้ส่ง</h2>
    <div class="address">
        <p><?php echo $date; ?></p>
        <p><?php echo $name . ' ' . $lastN; ?></p>
        <p><?php echo $homeNum; ?></p>
        <p><?php echo $tum; ?></p>
        <p><?php echo $aum; ?></p>
        <p>จังหวัด <?php echo $jung; ?></p>
        <p>โทร: <?php echo $phone; ?></p>
        <p>รหัส: <?php echo $pass; ?></p>
    </div>
</div>

<div class="recipient">
    <h2>ผู้รับ</h2>
    <div class="address">
        <p><?php echo $date2; ?></p>
        <p><?php echo $name2 . ' ' . $lastN2; ?></p>
        <p><?php echo $homeNum2; ?></p>
        <p><?php echo $tum2; ?></p>
        <p><?php echo $aum2; ?></p>
        <p>จังหวัด <?php echo $jung2; ?></p>
        <p>โทร: <?php echo $phone2; ?></p>
        <p>รหัส: <?php echo $pass2; ?></p>
    </div>
</div>

</body>
</html>