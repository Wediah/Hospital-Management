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
    $ward = $_POST["ward"];
    $bedno = $_POST["bedno"];
    $allocate = $_POST["allocate"];
    $dellocate = $_POST["dellocate"];

    $sql = "UPDATE bed SET name='$name', ward='$ward', bedno='$bedno', allocate='$allocate',dellocate='$dellocate'  WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
        header("Location: adminLp.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM bed WHERE id=$id";
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
            Full Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            Ward: <input type="text" name="ward" value="<?php echo $row['ward']; ?>"><br>
            Bed Number: <input type="text" name="bedno" value="<?php echo $row['bedno']; ?>"><br>
            Allocation Date: <input type="date" name="allocate" value="<?php echo $row['allocate']; ?>"><br>
            Discharge Date: <input type="date" name="dellocate" value="<?php echo $row['dellocate']; ?>"><br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
