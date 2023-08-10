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
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $doctor = $_POST["doctor"];
        $prescription = $_POST["prescription"];

        $sql = "INSERT INTO prescriptions (date, name, age, gender, doctor, prescription) VALUES ('$date', '$name','$age', '$gender', '$doctor', '$prescription')";

        if (mysqli_query($conn,$sql)){
            header("Location: doctorPres.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>