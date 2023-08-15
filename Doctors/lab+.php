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
        $date = $_POST["date"];
        $doctor = $_POST["doctor"];
        $test = $_POST["test"];
        $ddate = $_POST["ddate"];
        $report = $_POST["report"];

        $sql = "INSERT INTO labreq (name, date, doctor, test, ddate, report) VALUES ('$name', '$date', '$doctor', '$test', '$ddate', '$report')";

        if (mysqli_query($conn,$sql)){
            header("Location: labReport.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>