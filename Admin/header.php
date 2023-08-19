<?php 
session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location: adminSignin.php");
    exit();
}

$host = "localhost:3306";
$user = "root";
$pass = "";
$dbname = "hospitalmanagement";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_SESSION['user_email'];
$sql = "SELECT * FROM admin WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
} else {
    echo "User data not found.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css"> 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="./script.js"></script>
</head>
<body>
<!--navigation bar on large screen-->
  <nav>
      <div class="nav1">
          <div class="nav2"> 
                <div class="ti1"> 
                    <a href="./adminLp.php">AMC</a> 
                </div>

                <div class="nav3" id="navigation">
                    <ul>
                        <li><a href ="./adminLp.php">Dashboard</a></li>
                        <li>
                            <a href="./patient1.php">Patients</a>
                        </li>
                        <li>
                            <a href="./doctor1.php">Doctor</a>
                        </li>
                        <li>
                            <a href="./nurse1.php">Nurses</a>
                        </li>
                        <li>
                            <a href ="./pharma1.php">Pharmacist</a>
                        </li>
                        <li>
                            <a href="./lab1.php">Laboratorist</a>
                        </li>
                        <li>
                            <a href="./acc1.php">Accountant</a>
                        </li>
                    </ul>
                    
                </div>
                <div class="ti3">
                <button class="button--3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $user_data['fullname']; ?>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./adminPro.php">Profile</a></li>
                    <li><a class="dropdown-item" href="./logout.php">Sign out</a></li>
                </ul>
                    <button class="snav" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <img src="./Adminimg/iconn.png" alt="">
                    </button>
                </div>
                
                
          </div>
      </div>
  </nav>

  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="mobile-nav">
            <a href="./adminLp.php">Dashboard</a>
            <a href="./patient1.php">Patients</a>
            <a href="./nurse1.php">Nurses</a>
            <a href="./pharma1.php">Pharmacist</a>
            <a href="./lab1.php">Laboratorist</a>
            <a href="./acc1.php">Accountant</a>
            <a href="./adminPro.php">Profile</a>
            <a href="logout.php">Sign out</a>
        </div>
      
    </div>
  </div>

    
</body>
</html>