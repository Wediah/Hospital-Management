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
    $name = $_POST["name"];
    $date = $_POST["date"];
    $doctor = $_POST["doctor"];
    $test = $_POST["test"];
    $ddate = $_POST["ddate"];
    $report = $_POST["report"];

    $sql = "UPDATE labreq SET name='$name', doctor='$doctor',test='$test', report='$report'   WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
        header("Location: labReport.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM labreq WHERE id=$id";
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
            Date: <input type="text" name="date" value="<?php echo $row['date']; ?>"><br>
            Patient Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            Doctor: <input type="date" name="date" value="<?php echo $row['date']; ?>"><br>
            Test Type: <input type="text" name="paymedium" value="<?php echo $row['paymedium']; ?>"><br>
            Due Date: <input type="date" name="ddate" value="<?php echo $row['dtate']; ?>"><br>
            Report: <input type="text" name="report" value="<?php echo $row['report']; ?>"><br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
