<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #000;
            color:white;
            padding:10px;
            font-size:30px;
            text-align:center;
        }

    </style>
</head>
<body>
    <main>
        <form action="form_handler.php" method="post">
            <label for="firstname" >FirstName :</label>
            <br><input type="text" name="firstname" require>

            <br><label for="lastname">LastName :</label>
            <br><input type="text" name="lastname" id="" require>

            <br><label for="favouritepet">FavouritePet ?</label>
            <br><select name="favouritepet" id="">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="tiger">Tiger</option>
            </select>

            <br><button type="submit">Submit</button>
        </form>
    </main>
    
</body>
</html>