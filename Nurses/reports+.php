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
        $name = $_POST["name"];
        $doctor = $_POST["doctor"];
        $description = $_POST["description"];

        $sql = "INSERT INTO reports (date, name, doctor, description) VALUES ('$date', '$name', '$doctor', '$description')";

        if (mysqli_query($conn,$sql)){
            header("Location: reports.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>