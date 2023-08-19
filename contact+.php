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
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $dob  = $_POST["message"];

        $sql = "INSERT INTO contact (fname,lname, email, phone,message) VALUES ('$fname','$lname', '$email', '$phone','$message')";

        if (mysqli_query($conn,$sql)){
            
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>