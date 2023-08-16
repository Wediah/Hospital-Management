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
        $time = $_POST["time"];
        $number = $_POST["number"];

        $sql = "INSERT INTO birth (name, date, time, number) VALUES ('$name', '$date', '$time', '$number')";

        if (mysqli_query($conn,$sql)){
            header("Location: adminLp.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>