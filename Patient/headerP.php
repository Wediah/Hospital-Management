
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucy Memorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style3.css"> 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</head>
<body>
<?php
    //session_start();

    // Check if the user is logged in
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("Location: patientLogin.php");
        exit();
    }

    // Database connection information
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "hospitalmanagement";

    // Create a new connection
    $conn = mysqli_connect($host, $user, $pass, $dbname);

    // Check for connection errors
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare a SQL query to retrieve the first name from the database based on the email address
    $email = $_SESSION["email"];
    $sql = "SELECT fname FROM patients WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($userFirstName);
    $stmt->fetch();
    $stmt->close();

    // Close the database connection
    mysqli_close($conn);
?>
<!--navigation bar on large screen-->
  <nav>
      <div class="nav1">
          <div class="nav2"> 
                <div class="ti1"> 
                    <a href="">Lucy Memeorial</a> 
                </div>

                <div class="nav3" id="navigation">
                    <ul>
                        <li>
                            <a href="">Appointments</a>
                            <div class="dropdown">
                            
                                <a href="#">Appointment List</a>
                                <a href="#">Pending Appointment</a>
                            </div>
                        </li>
                        <li>
                            <a href="">Prescriptions</a>
                        </li>
                        <li>
                            <a href ="">Medications</a>
                        </li>
                        <li>
                            <a href="">Doctor List</a>
                        </li>
                        <li>
                            <a href="">Operation History</a>
                        </li>
                        <li>
                            <a href="">Admission History</a>
                        </li>
                    </ul>
                    
                </div>
                <div class="ti3">
                <div >
                  <div id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
                      <ion-icon class="icon1" name="person-outline" ></ion-icon>
                      <span><?php echo $userFirstName; ?></span>
                  </div>
                   <!--drop down-->
                    <ul class="dropdown-menu p-1 mt-1" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="">Profile</a></li>
                      <li><a class="dropdown-item" href="">Chnage Password</a></li>
                      <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                      
                    </ul>
                </div>
                    <button class="snav" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <img src="/Admin/Adminimg/iconn.png" alt="">
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
            <a href="">Appointment List</a>
            <hr>
            <a href="">Pending Appointments</a>
            <hr>
            <a href="">Prescriptions</a>
            <hr>
            <a href="">Medications</a>
            <hr>
            <a href="">Doctor List</a>
            <hr>
            <a href="">Operation History</a>
            <hr>
            <a href="">Admission History</a>
            <hr>
        </div>
      
    </div>
  </div>

    
</body>
</html>