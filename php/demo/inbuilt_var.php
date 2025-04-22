<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        echo $_SERVER["SERVER_NAME"];
        echo "<br>";
        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>";
        echo $_SERVER["PHP_SELF"];
        echo "<br>";
        echo $_SERVER["REQUEST_METHOD"];
        echo "<br>";


        echo $_GET['name'];
        echo "<br>";
        echo $_GET['age'];

        echo $_REQUEST['namae'];

        echo $_FILES['name'];
        echo $_COOKIE['name'];
        $_SESSION['username'] = "AMAR";
        echo $_SESSION['username'];
    
    ?>

</body>
</html>