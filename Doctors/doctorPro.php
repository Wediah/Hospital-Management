
<?php
session_start();
include './doctorNav.php';


if (!isset($_SESSION['user_email'])) {
    header("Location: doctorSignin.php");
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

$id = $_SESSION['user_email'];
$sql = "SELECT * FROM doctor WHERE email = '$user_email'";
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
<html>
<head>
    <title>AMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./doctorNav.css">
    <script src="./doctor.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <h1>User Profile</h1>
    <form method="post" action="update_profile.php"> <!-- Action should point to a script that handles form updates -->
        <label for="username">Username:</label>
        <input type="text" id="fullname" name="fullname" value="<?php echo $user_data['fullname']; ?>" disabled>
        
        <label for="department">Department:</label>
        <input type="text" id="department" name="department" value=" <?php echo $user_data['department']; ?>" disabled>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value=" <?php echo $user_data['email']; ?>" disabled>
        
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" value=" <?php echo $user_data['phone']; ?>">
        
        <input type="submit" value="Update Profile">
    </form>
</body>
</html>
