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
    $id = $_POST['id'];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $dob  = $_POST["dob"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];

    $sql = "UPDATE patients SET fname='$fname',lname='$lname',  email='$email', phone='$phone', dob='$dob', gender='$gender', password='$password'  WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
        header("Location: patient1.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM patients WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="./admin.css">
    <script src="./admin.js"></script>
</head>
<body>
    <h2>Ayao Medical Center</h2>
    <div>
        <h3>Edit data</h3>
        <hr>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            First Name: <input type="text" name="fname" value="<?php echo $row['fname']; ?>"><br>
            Last Name: <input type="text" name="lname" value="<?php echo $row['lname']; ?>"><br>
            Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
            Phone: <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>
            Date of Birth: <input type="text" name="dob" value="<?php echo $row['dob']; ?>"><br>
            Gender: <input type="text" name="gender" value="<?php echo $row['gender']; ?>"><br>
            Password: <input type="text" name="password" value="<?php echo $row['password']; ?>"><br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
