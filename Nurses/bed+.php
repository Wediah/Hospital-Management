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
        $email = $_POST["email"];
        $ward = $_POST["ward"];
        $bedno = $_POST["bedno"];
        $allocate = $_POST["allocate"];
        $dellocate = $_POST["dellocate"];

        $sql = "INSERT INTO bed (name, email, ward, bedno, allocate, dellocate) VALUES ('$name', '$email', '$ward', '$bedno', '$allocate', '$dellocate')";

        if (mysqli_query($conn,$sql)){
            header("Location: bed.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>