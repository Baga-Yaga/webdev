<!DOCTYPE html>
<html>
<head>
    <title>PHP Variables</title>
    <style>
        body { 
            font-family: Arial; 
            background: #f0f0f0; 
            padding: 20px; 
        }
        .box { 
            background: white; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 2px 2px 10px #aaa; }
    </style>
</head>
<body>
    <div class="box">
        <h2>PHP Variables</h2>
        <?php
            $name = "BabaYaga";
            $age = 99;
            $isHacker = true;

            echo "Name: $name <br>";
            echo "Age: $age <br>";
            echo "Are you a hacker? " . ($isHacker ? "Absolutely 💻" : "Nah") . "<br>";
        ?>
    </div>
</body>
</html>
