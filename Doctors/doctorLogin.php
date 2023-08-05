<?php
session_start(); // Start the session to store login information

$host = "localhost:3306";
$user = "root";
$pass = "";
$dbname = "hospitalmanagement";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform a SELECT query to check if the user's credentials exist in the database
    $sql = "SELECT * FROM doctor WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // Login successful
        $_SESSION["loggedin"] = true;
        $_SESSION["email"] = $email;
        header("Location: doctorLp.php"); // Redirect to the dashboard
        exit();
    } else {
        // Login failed
        echo "Invalid email or password.";
    }
}
?>
