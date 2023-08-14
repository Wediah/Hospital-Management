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
        $category = $_POST["category"];

        $sql = "INSERT INTO medcat (name, category) VALUES ('$name', '$category')";

        if (mysqli_query($conn,$sql)){
            header("Location: pharmaLp.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>