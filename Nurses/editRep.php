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
    $email = $_POST["email"];
    $name = $_POST["name"];
    $doctor = $_POST["doctor"];
    $operation = $_POST["operation"];
    $description = $_POST["description"];

    $sql = "UPDATE reports SET date='$date', name='$name', email='$email', doctor='$doctor', operation='$operation', description='$description'  WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
        header("Location: reports.php");
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
            Date: <input type="date" name="date" value="<?php echo $row['date']; ?>"><br>
            Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
            Doctor: <input type="text" name="doctor" value="<?php echo $row['doctor']; ?>"><br>
            Operation Type: <input type="text" name="operation" value="<?php echo $row['operation']; ?>"><br>
            Description: <textarea type="text" name="description" value="<?php echo $row['description']; ?>"></textarea><br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
