<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eligibility Checker</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .age_form {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            text-align: center;
            font-size: 20px;
        }

        .result h1 {
            color: green;
        }

        .result h3 {
            color: red;
        }
    </style>
</head>
<body>
    <div class="age_form">
        <h2>Check if You are Eligible or Not!</h2>
        <form method="POST">
            <label for="name">Name :</label>
            <input type="text" name="name" id="name" required>

            <label for="age">Age :</label>
            <input type="text" name="age" id="age" required>

            <button type="submit">Submit</button>
        </form>

        <?php 
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $name = $_POST['name'];
                $age = $_POST['age'];
                
                echo "<div class='result'>";
                if (is_numeric($age)) {
                    if ($age >= 18) {
                        echo "<h1>✅ $name, You're Eligible!</h1>";
                    } else {
                        echo "<h3>❌ Sorry $name, Not Eligible.</h3>";
                    }
                } else {
                    echo "<p>Please enter a valid numeric age.</p>";
                }
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>
