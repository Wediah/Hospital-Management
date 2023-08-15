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
    $id = $_POST["id"];
    $name = $_POST["name"];
    $date = $_POST["date"];
    $paymedium = $_POST["paymedium"];
    $totalbill = $_POST["totalbill"];
    $paybill = $_POST["paybill"];
    $balance = $_POST["balance"];
    $status = $_POST["status"];

    $sql = "UPDATE payment SET name='$name', date='$date',paymedium='$paymedium', totalbill='$totalbill', paybill='$paybill', balance='$balance', status='$status'   WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
        header("Location: adminLp.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM payment WHERE id=$id";
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
            Date: <input type="date" name="date" value="<?php echo $row['date']; ?>"><br>
            Payment Medium: <input type="text" name="paymedium" value="<?php echo $row['paymedium']; ?>"><br>
            Total Bill: <input type="text" name="totalbill" value="<?php echo $row['totalbill']; ?>"><br>
            Amount Paid: <input type="text" name="paybill" value="<?php echo $row['paybill']; ?>"><br>
            Balance: <input type="text" name="balance" value="<?php echo $row['balance']; ?>"><br>
            Status: <input type="text" name="status" value="<?php echo $row['status']; ?>"><br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
