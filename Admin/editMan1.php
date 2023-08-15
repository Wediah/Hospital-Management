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
    $category = $_POST["category"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $manufacturer = $_POST["manufacturer"];
    $mandate = $_POST["mandate"];
    $sold = $_POST["sold"];
    $expiry = $_POST["expiry"];
  

    $sql = "UPDATE manage SET name='$name', category='$category', price='$price', quantity='$quantity',  sold='$sold', manufacturer= '$manfacturer',mandate='$mandate', expiry='$expiry'  WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
        header("Location: adminLp.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM manage WHERE id=$id";
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
            Category: <input type="text" name="category" value="<?php echo $row['category']; ?>"><br>
            Price: <input type="text" name="price" value="<?php echo $row['price']; ?>"><br>
            Total Quantity: <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>"><br>
            Quantity Sold: <input type="text" name="sold" value="<?php echo $row['sold']; ?>"><br>
            Manufacturer: <input type="text" name="manufacturer" value="<?php echo $row['manufacturer']; ?>"><br>
            Manufacturer Date: <input type="date" name="mandate" value="<?php echo $row['mandate']; ?>"><br>
            Expiry Date: <input type="date" name="expiry" value="<?php echo $row['expiry']; ?>"><br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
