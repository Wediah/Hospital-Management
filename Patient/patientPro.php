
<?php
//session_start();
include './patientNav.php';


if (!isset($_SESSION['user_email'])) {
    header("Location: patientSignin.php");
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $dob  = $_POST["dob"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];

    $sql = "UPDATE patients SET fname='$fname', lname='$lname',email='$email', phone='$phone',dob='$dob',gender='$gender', password='$password' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$email = $_SESSION['user_email'];
$sql = "SELECT * FROM patients WHERE email = '$email'";
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
    <link rel="stylesheet" href="./patientNav.css">
    <script src="./nurse.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <h1 class="title">Ayao Medical Center</h1>
    <hr>
    <div class="appt-head">
        <div class="appt">
            <span class="material-symbols-outlined">
                arrow_circle_right
            </span>
            <h3>Profile</h3>
        </div>
    </div>
    <form class="forms" method="post" action="">
        <input type="hidden" name="id" value="<?php echo $user_data['id']; ?>">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" value="<?php echo $user_data['fname']; ?>">
        <label for="lname">Username:</label>
        <input type="text" id="lname" name="lname" value="<?php echo $user_data['lname']; ?>">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value=" <?php echo $user_data['email']; ?>"> 
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" value=" <?php echo $user_data['phone']; ?>">
        <label for="dob">Date of Birth:</label>
        <input type="text" id="dob" name="dob" value=" <?php echo $user_data['dob']; ?>">
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" value=" <?php echo $user_data['gender']; ?>">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value=" <?php echo $user_data['password']; ?>">
        
        <input type="submit" value="Update Profile">
    </form>

    <hr>

    
</body>
</html>