<?php
$uploadDir = "uploads/";
$allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'docx', 'txt'];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["uploadedFile"])) {
    $fileName = $_FILES["uploadedFile"]["name"];
    $fileTmp  = $_FILES["uploadedFile"]["tmp_name"];
    $fileSize = $_FILES["uploadedFile"]["size"];
    $fileError = $_FILES["uploadedFile"]["error"];

    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if ($fileError === 0) {
        if (in_array($fileExt, $allowedTypes)) {
            if ($fileSize < 5 * 1024 * 1024) { // 5 MB limit
                $newName = uniqid("file_", true) . '.' . $fileExt;
                $destination = $uploadDir . $newName;

                if (move_uploaded_file($fileTmp, $destination)) {
                    echo "<p>✅ File uploaded successfully: <a href='$destination'>$newName</a></p>";
                } else {
                    echo "<p>❌ Failed to move file.</p>";
                }
            } else {
                echo "<p>❌ File is too large. Max size is 5MB.</p>";
            }
        } else {
            echo "<p>❌ Invalid file type. Allowed: " . implode(', ', $allowedTypes) . "</p>";
        }
    } else {
        echo "<p>❌ Error uploading file. Code: $fileError</p>";
    }
} else {
    echo "<p>No file submitted.</p>";
}
?>
