<?php 
session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location: pharmaSignin.php");
    exit();
}

$host = "localhost:3306";
$user = "root";
$pass = "";
$dbname = "hospitalmanagement";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_SESSION['user_email'];
$sql = "SELECT * FROM pharma WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
} else {
    echo "User data not found.";
    exit();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <link rel="stylesheet" href="pharmaNav.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
<div id="mySidenav" class="sidenav">
    <div class="image-class">
        <h3>Welcome, <span><?php echo $user_data['fullname']; ?></span></h3>
    </div>
    <hr>
    <div class="links-only">
        
            
        <a href="./pharmaLp.php">
            <span class="material-symbols-outlined">
            medication
            </span>
            <h4>Medicine Category</h4>
        </a>
        <hr>
        
        <a href="./manage.php">
            <span class="material-symbols-outlined">
            prescriptions
            </span>
            <h4>Manage Medicines</h4>
        </a>
        <hr>
        <a href="./pres.php">
            <span class="material-symbols-outlined">
            pill
            </span>
            <h4>Prescribed Meds </h4>
        </a>
        <hr>
    </div>

    <div class="log--out">
        <a href="./pharmaPro.php">
            <span class="material-symbols-outlined">
            person
            </span>
            <h4>Profile</h4>
        </a>
        <hr>
        <a href="./logout4.php">
            
            <span class="material-symbols-outlined">
            logout
            </span>
            <h4>logout</h4>
        </a>
    </div>
</div>
</body>
</html>