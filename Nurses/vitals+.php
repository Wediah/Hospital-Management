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
        $temperature = $_POST["temperature"];
        $bloodpressure = $_POST["bloodpressure"];
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        $bloodsugar = $_POST["bloodsugar"];
        $heartrate = $_POST["heartrate"];

        $sql = "INSERT INTO vitals (name, temperature, bloodpressure, weight, height, bloodsugar, heartrate) VALUES ('$name', '$temperature', '$bloodpressure', '$weight', '$height', '$bloodsugar', '$heartrate')";

        if (mysqli_query($conn,$sql)){
            header("Location: nurseLp.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>