<?php
$servername = "localhost";
$username = "root";  // Change if needed
$password = "";
$dbname = "codethone";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['upload'])) {
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $upload_dir = "uploads/";

    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $file_path = $upload_dir . basename($file_name);

    if (move_uploaded_file($file_tmp, $file_path)) {
        $sql = "INSERT INTO uploads (file_name, file_path) VALUES ('$file_name', '$file_path')";
        if ($conn->query($sql) === TRUE) {
            echo "File uploaded successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "File upload failed!";
    }
}

$conn->close();
?>
