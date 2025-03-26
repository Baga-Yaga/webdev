<?php
// Simple PHP file with HTML and CSS
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            background-color:rgb(206, 251, 244);
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            background-color:   rgba(111, 220, 247, 0.92);
        }
    </style>
</head>
<body>  
    <div class="container">
                <h1><?php echo "Hello, World!"; ?></h1>
            </div>
        </body>
</html>
