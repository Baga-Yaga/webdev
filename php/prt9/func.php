



<!DOCTYPE html>
<html>
<head>
    <title>HatGPT Function</title>
    <style>
        body { margin: 0; background: #111; color: #eee; font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .wrapper { text-align: center; }
        h1 { color: #00ffc8; }
        .box { background: #1c1c1c; padding: 20px; border-radius: 10px; width: 500px; }
        input, button { width: 100%; margin: 10px 0; padding: 10px; background: #222; color: #fff; border: none; border-radius: 5px; font-size: 18px; }
        button { background: #00ffc8; color: #000; font-weight: bold; }
        .result { background: #222; margin-top: 15px; padding: 10px; border-radius: 5px; font-size: 18px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Name Repeater</h1>
        <div class="box">
            <form method="POST">
                <input type="text" name="name" placeholder="Name" required>
                <input type="number" name="times" placeholder="Times" min="1" required>
                <button>Repeat</button>
            </form>
            <div class="result">
            <?php
            function repeatName($name, $times) {
                for ($i = 1; $i <= $times; $i++) {
                    echo "<div class='line'>$i. $name</div>";
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $times = $_POST["times"];

                echo "<div class='result'>";
                repeatName($name, $times);
                echo "</div>";
            }
        ?>
            </div>
        </div>
    </div>
</body>
</html>
