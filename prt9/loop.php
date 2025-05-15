<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP For Loop</title>
    <style>
        body {
            background: #1f1f1f;
            color: #f1f1f1;
            font-family: 'Courier New', Courier, monospace;
            padding: 30px;
        }

        .loop-box {
            background: #2e2e2e;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
            max-width: 400px;
            margin: auto;
        }

        .loop-item {
            padding: 10px;
            border-bottom: 1px solid #444;
        }

        .loop-item:last-child {
            border-bottom: none;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #00ffcc;
        }
    </style>
</head>
<body>
    <div class="loop-box">
        <div class="title">Top 10 Hacker Tools</div>
        <?php
            $tools = [
                "Nmap", "Burp Suite", "Nikto", "Gobuster", "Hydra",
                "John the Ripper", "sqlmap", "Metasploit", "wpscan", "ffuf"
            ];

            for ($i = 0; $i < count($tools); $i++) {
                echo "<div class='loop-item'>" . ($i + 1) . ". $tools[$i]</div>";
            }
        ?>
    </div>
</body>
</html>
