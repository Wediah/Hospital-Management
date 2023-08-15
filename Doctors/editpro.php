<?php
$host = "localhost: 3306";
$user = "root";
$password = "";
$dbname = "hospitalmanagement";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['fullname'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "UPDATE doctor SET fullname='$name', department='$department', email='$email', phone='$phone', password='$password' WHERE fullname=$name";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
        header("Location: doctorPro.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "Doctor ID: $id";
    $sql = "SELECT * FROM doctor WHERE id=$id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Doctor data not found.";
        exit();
    }
} else {
    echo "Doctor ID not provided.";
    exit();
}

$conn->close();
?>


