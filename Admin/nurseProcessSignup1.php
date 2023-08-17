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
        $fname = $_POST["fname"];
        $depart = $_POST["depart"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];

        $sql = "INSERT INTO nurse (fullname, department, email, phone, password) VALUES ('$fname', '$depart', '$email', '$phone', '$password')";

        if (mysqli_query($conn,$sql)){
            header("Location: nurse1.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>