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
    $time = $_POST['time'];
    $name = $_POST['name'];
    $name = $_POST['email'];
    $doctor = $_POST['doctor'];
    $mail= $_POST['mail'];

    $sql = "UPDATE appointments SET date='$date', time='$time', name='$name', email='$email', doctor='$doctor', mail='$mail' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
        header("Location: doctorLp.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM appointments WHERE id=$id";
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
            Time: <input type="time" name="time" value="<?php echo $row['time']; ?>"><br>
            Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            Patient Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
            Doctor: <input type="text" name="doctor" value="<?php echo $row['doctor']; ?>"><br>
            Doctor Email: <input type="text" name="mail" value="<?php echo $row['mail']; ?>"><br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
