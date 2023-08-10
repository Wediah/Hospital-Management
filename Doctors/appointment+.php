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
        $doctor = $_POST["doctor"];

        $sql = "INSERT INTO appointments (date, time, name, doctor) VALUES ('$date', '$time', '$name', '$doctor')";

        if (mysqli_query($conn,$sql)){
            header("Location: doctorLp.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>