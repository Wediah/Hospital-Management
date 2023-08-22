<?php
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $dbname = "hospitalmanagement";

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if (!$conn){
        die('Could not connect: '.mysqli_connect_error());
    }
    echo 'Connected successfully';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message  = $_POST["message"];

        $sql = "INSERT INTO contact (name, email, phone,message) VALUES ('$name', '$email', '$phone','$message')";

        if (mysqli_query($conn,$sql)){
            header("Location: index.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>