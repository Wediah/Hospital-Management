<?php
$host = "localhost:3306";
$user = "root";
$password = "";
$dbname = "hospitalmanagement";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST["name"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $number = $_POST["number"];

    $sql = "UPDATE birth SET name='$name', date='$date' , time='$time', number='$number'  WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
        header("Location: adminLp.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM birth WHERE id=$id";
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
            Patient Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            Date of Birth: <input type="text" name="date" value="<?php echo $row['date']; ?>"><br>
            Time of Birth: <input type="text" name="time" value="<?php echo $row['time']; ?>"><br>
            Number: <input type="text" name="number" value="<?php echo $row['number']; ?>"><br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
