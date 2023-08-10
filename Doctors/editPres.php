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
    $date = $_POST['date'];
    $time = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $doctor = $_POST['doctor'];
    $prescription = $_POST['prescription'];

    $sql = "UPDATE prescriptions SET date='$date', name='$name', age='$age', gender='$gender', doctor='$doctor', prescription='$prescription' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
        header("Location: doctorPres.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM prescriptions WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="./doctor.css">
    <script src="./doctor.js"></script>
</head>
<body>
    <h2>Ayao Medical Center</h2>
    <div>
        <h3>Edit data</h3>
        <hr>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            Date: <input type="date" name="date" value="<?php echo $row['date']; ?>"><br>
            Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            Age: <input type="text" name="age" value="<?php echo $row['age']; ?>"><br>
            Gender: <input type="text" name="gender" value="<?php echo $row['gender']; ?>"><br>
            Doctor: <input type="text" name="doctor" value="<?php echo $row['doctor']; ?>"><br>
            Prescription: <textarea type="text" name="prescription" value="<?php echo $row['prescription']; ?>"></textarea><br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
