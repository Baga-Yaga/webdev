<?php  

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $pet = htmlspecialchars($_POST["favouritepet"]);

    if (empty($firstname) || empty($lastname)){
        header("Location:form.php");
        exit();
    }



    echo "Data Submitted : $firstname , $lastname ,$pet";
}   

?>
