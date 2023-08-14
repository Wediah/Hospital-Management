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
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];
        $manufacturer = $_POST["manufacturer"];
        $mandate = $_POST["mandate"];
        $sold = $_POST["sold"];
        $expiry = $_POST["expiry"];

        $sql = "INSERT INTO manage (name, category, price, quantity, manufacturer, mandate, sold, expiry) VALUES ('$name', '$category', '$price', '$quantity', '$manufacturer', '$mandate', '$sold', '$expiry')";

        if (mysqli_query($conn,$sql)){
            header("Location: bed.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>