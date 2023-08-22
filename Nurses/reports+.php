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
        $email = $_POST["email"];
        $doctor = $_POST["doctor"];
        $operation = $_POST["operation"];
        $description = $_POST["description"];

        $sql = "INSERT INTO reports (date, name, email, doctor, operation, description) VALUES ('$date', '$name', '$email', '$doctor', '$operation', '$description')";

        if (mysqli_query($conn,$sql)){
            header("Location: reports.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>