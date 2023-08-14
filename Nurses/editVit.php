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
    $temperature = $_POST["temperature"];
    $bloodpressure = $_POST["bloodpressure"];
    $weight = $_POST["weight"];
    $height = $_POST["height"];
    $bloodsugar = $_POST["bloodsugar"];
    $heartrate = $_POST["heartrate"];

    $sql = "UPDATE vitals SET name='$name', temperature='$temperature', bloodpressure='$bloodpressure', weight='$weight',height='$height', bloodsugar='$bloodsugar', heartrate='$heartrate'  WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
        header("Location: nurseLp.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM vitals WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="./nurse.css">
    <script src="./nurse.js"></script>
</head>
<body>
    <h2>Ayao Medical Center</h2>
    <div>
        <h3>Edit data</h3>
        <hr>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            Full Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            Temperature: <input type="text" name="temperature" value="<?php echo $row['temperature']; ?>"><br>
            Blood Pressure: <input type="text" name="bloodpressure" value="<?php echo $row['bloodpressure']; ?>"><br>
            Weight: <input type="text" name="weight" value="<?php echo $row['weight']; ?>"><br>
            Height: <input type="text" name="height" value="<?php echo $row['height']; ?>"><br>
            Blood Sugar: <input type="text" name="bloodsugar" value="<?php echo $row['bloodsugar']; ?>"><br>
            Heart Rate: <input type="text" name="heartrate" value="<?php echo $row['heartrate']; ?>"><br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
