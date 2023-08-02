<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucy Memorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"> 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</head>
<body>
<!--navigation bar on large screen-->
  <nav>
      <div class="nav1">
          <div class="nav2"> 
                <div class="ti1"> 
                    <a href="">Lucy Memeorial</a> 
                </div>

                <div class="nav3" id="navigation">
                    <ul>
                        <li><a href ="">Dashboard</a></li>
                        <li>
                            <a href="">Patients</a>
                            <div class="dropdown">
                            
                                <a href="#">Records</a>
                                <a href="#">Reports</a>
                                <a href="#">New Patient</a>
                            </div>
                        </li>
                        <li>
                            <a href="">Nurses</a>
                            <div class="dropdown">
                            
                                <a href="#">Records</a>
                                <a href="#">Reports</a>
                                <a href="#">New Patient</a>
                            </div>
                        </li>
                        <li>
                            <a href ="">Pharmacist</a>
                            <div class="dropdown">
                            
                                <a href="#">Records</a>
                                <a href="#">Reports</a>
                                <a href="#">New Patient</a>
                            </div>
                        </li>
                        <li>
                            <a href="">Laboratorist</a>
                            <div class="dropdown">
                            
                                <a href="#">Records</a>
                                <a href="#">Reports</a>
                                <a href="#">New Patient</a>
                            </div>
                        </li>
                        <li>
                            <a href="">Accountant</a>
                            <div class="dropdown">
                            
                                <a href="#">Records</a>
                                <a href="#">Reports</a>
                                <a href="#">New Patient</a>
                            </div>
                        </li>
                    </ul>
                    
                </div>
                <div class="ti3">
                    <a href="logout.php" class="button--3">Sign out</a>
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
            <a href="">Dashboard</a>
            <a href="">Patients</a>
            <a href="">Nurses</a>
            <a href="">Pharmacist</a>
            <a href="">Laboratorist</a>
            <a href="">Accountant</a>
            <a href="logout.php">Sign out</a>
        </div>
      
    </div>
  </div>

    
</body>
</html>