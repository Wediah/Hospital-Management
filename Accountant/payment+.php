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
        $paymedium = $_POST["paymedium"];
        $totalbill = $_POST["totalbill"];
        $paybill = $_POST["paybill"];
        $balance = $_POST["balance"];
        $status = $_POST["status"];

        $sql = "INSERT INTO payment (name, date, paymedium, totalbill, paybill, balance, status) VALUES ('$name', '$date', '$paymedium', '$totalbill', '$paybill', '$balance', '$status')";

        if (mysqli_query($conn,$sql)){
            header("Location: pay.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>