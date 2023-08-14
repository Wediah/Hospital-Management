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
    $cdate = $_POST["cdate"];
    $ddate = $_POST["ddate"];
    $vat = $_POST["vat"];
    $discount = $_POST["discount"];
    $total = $_POST["total"];
    $status = $_POST["status"];

    $sql = "UPDATE invoice SET name='$name', cdate='$cdate',ddate='$ddate', vat='$vat', discount='$discount', total='$total', status='$status'   WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
        header("Location: accLp.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM invoice WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="./acc.css">
    <script src="./acc.js"></script>
</head>
<body>
    <h2>Ayao Medical Center</h2>
    <div>
        <h3>Edit data</h3>
        <hr>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            Medicine: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            Category: <input type="text" name="category" value="<?php echo $row['category']; ?>"><br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
