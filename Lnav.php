<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles.css"> 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
<!--navigation bar on large screen-->
  <nav>
      <div class="nav1">
          <div class="nav2"> 
                <div class="ti1"> 
                    <a href="./index.php">AMC</a> 
                </div>

                <div class="nav3" id="navigation">
                    <ul>
                        <li>
                            <a href="./index.php">HOME</a>
                        </li>
                        <li>
                            <a href="./land3.php">DEPARTMENTS</a>
                        </li>
                        <li>
                            <a href ="./land2.php">ABOUT</a>
                        </li>
                        <li>
                            <a href="./land.php">APPOINTMENT</a>
                        </li>
                        <li>
                            <a href="./land4.php">CONTACT</a>
                        </li>
                    </ul>
                    
                </div>
                <div class="ti3">
                    <a class="button--3" href="./land.php" >Login</a>
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
            
            <a href="./index.php">HOME</a>
            <a href="./land3.php">DEPARTMENTS</a>
            <a href="./land2.php">ABOUT</a>
            <a href="./land.php">APPOINTMENT</a>
            <a href="./land4.php">CONTACT</a>
        </div>
      
    </div>
  </div>

    
</body>
</html>