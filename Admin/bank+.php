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
        $type = $_POST["type"];
        $quantity = $_POST["quantity"];

        $sql = "INSERT INTO bank (type, quantity) VALUES ('$type', '$quantity')";

        if (mysqli_query($conn,$sql)){
            header("Location: adminLp.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>