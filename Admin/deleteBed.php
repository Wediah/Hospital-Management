<?php
$host = "localhost:3306";
$user = "root";
$password = "";
$dbname = "hospitalmanagement";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $conn->close();
    header("Location: adminLp.php"); 
    exit();
}

$sql = "DELETE FROM birth WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    // Deletion successful
} else {
    // Error handling
}

$conn->close();
header("Location: adminLp.php"); 
exit();
?>
