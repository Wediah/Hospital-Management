<?php
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $dbname = "hospitalmanagement";

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if (!$conn){
        die('Could not connect: '.mysqli_connect_error());
    }
    echo 'Connected successfully <br/>';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST["fname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];

        $sql = "INSERT INTO admin (fullname, email, phone, password) VALUES ('$fname', '$email', '$phone', '$password')";

        if (mysqli_query($conn,$sql)){
            echo 'Record inserted successfully';
        } else {
            Echo "Could not insert data:".mysqli_error($conn);
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Signup</title>
    <link rel="stylesheet" href="./admin.css">
    
</head>
<body>
    <h2>Lucy Mememorial</h2>
    <div>
        <h3>Create a new account</h3>
        <p>It's quick and simple</p>
        <hr>
        <form name="signup" action="" method="post">
        <input type="text" name="fname" id="fname" placeholder="Full Name">
        <input type="text" name="email" id="email" placeholder="Email Address">
        <input type="text" name="phone" id="phone" placeholder="Phone Number">
        <input type="password" name="password" id="password" placeholder="New Password">
        <button type="submit" value="submit" onclick="validateForm()">Sign up</button>
        </form>
        

        
        <a href="./adminSignIn.php"><p class="login-refer">Already having an account?</p></a>
    </div>

    <script src="./admin.js"></script>
</body>
</html>