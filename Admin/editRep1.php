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
    $name = $_POST["date"];
    $ward = $_POST["name"];
    $bedno = $_POST["doctor"];
    $allocate = $_POST["description"];

    $sql = "UPDATE reports SET date='$date', name='$name', doctor='$doctor', description='$description'  WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
        header("Location: adminLp.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM reports WHERE id=$id";
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
            Date: <input type="date" name="date" value="<?php echo $row['date']; ?>"><br>
            Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            Doctor: <input type="text" name="doctor" value="<?php echo $row['doctor']; ?>"><br>
            Description: <textarea type="text" name="description" value="<?php echo $row['description']; ?>"></textarea><br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
