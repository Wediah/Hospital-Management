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
        $cdate = $_POST["cdate"];
        $ddate = $_POST["ddate"];
        $vat = $_POST["vat"];
        $discount = $_POST["discount"];
        $total = $_POST["total"];
        $status = $_POST["status"];

        $sql = "INSERT INTO invoice (name, cdate, ddate, vat, discount, total, status) VALUES ('$name', '$cdate', '$ddate', '$vat', '$discount', '$total', '$status')";

        if (mysqli_query($conn,$sql)){
            header("Location: accLp.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>