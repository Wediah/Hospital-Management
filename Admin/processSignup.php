<?php
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $dbname = "hospitalmanagement";

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if (!$conn){
        die('Could not connect: '.mysqli_connect_error());
    }
    echo 'Connected successfully <br/>';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST["fname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];

        $sql = "INSERT INTO admin (fullname, email, phone, password) VALUES ('$fname', '$email', '$phone', '$password')";

        if (mysqli_query($conn,$sql)){
            echo 'Sign up successfully';
        } 
    }
?>