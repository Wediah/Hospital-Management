<?php 
include './headerP.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucy Memorial</title>
    <link rel="stylesheet" href="./style4.css">

</head>
<body>
<?php
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("Location: patientLogin.php");
        exit();
    }

    // Database connection information
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "hospitalmanagement";

    // Create a new connection
    $conn = mysqli_connect($host, $user, $pass, $dbname);

    // Check for connection errors
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare a SQL query to retrieve the first name from the database based on the email address
    $email = $_SESSION["email"];
    $sql = "SELECT fname FROM patients WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($userFirstName);
    $stmt->fetch();
    $stmt->close();

    // Close the database connection
    mysqli_close($conn);
    ?>
    <h2>Welcome, <?php echo $userFirstName; ?></h2>
    <script src="./patients2.js"></script>  
</body>
</html>