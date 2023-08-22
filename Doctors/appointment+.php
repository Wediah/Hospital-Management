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
        $date = $_POST["date"];
        $time = $_POST["time"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $doctor = $_POST["doctor"];
        $mail = $_POST["mail"];

        $sql = "INSERT INTO appointments (date, time, name, email, doctor, mail) VALUES ('$date', '$time', '$name', '$email', '$doctor', '$mail')";

        if (mysqli_query($conn,$sql)){
            header("Location: doctorLp.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>