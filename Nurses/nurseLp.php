<?php include './nurseNav.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./nurseNav.css">
    <script src="./nurse.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <h1 class="title">Ayao Medical Center</h1>
    <hr>
    <div class="appt-head">
        <div class="appt">
            <span class="material-symbols-outlined">
                arrow_circle_right
            </span>
            <h3>Vitals</h3>
        </div>
        <div>
            <button class="appt-bttn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Record Vitals</button>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ayao Medical Center</h1>
                    <span class="material-symbols-outlined" data-bs-dismiss="modal">
                    close
                    </span>
                    
                </div>
                <div class="modal-body">
                    <form class="forms1" name="signup" action="./vitals+.php" method="post">
                        <input type="text" name="name" id="name" placeholder="Patient Name">
                        <input type="text" name="temperature" id="temperature" placeholder="Temperature">
                        <input type="text" name="bloodpressure" id="bloodpressure" placeholder="Blood Pressure">
                        <input type="text" name="weight" id="weight" placeholder="Weight">
                        <input type="text" name="height" id="height" placeholder="Height">
                        <input type="text" name="bloodsugar" id="bloodsugar" placeholder="Blood Sugar">
                        <input type="text" name="heartrate" id="heartrate" placeholder="Heart Rate">
                        <button type="submit" value="submit" onclick="validateForm()">Add Appointment</button>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php
    $host = "localhost:3306";
    $user = "root";
    $password = "";
    $dbname = "hospitalmanagement";

    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM vitals";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Patient Name</th><th>Temperature</th><th>BP</th><th>Weight</th> <th>Height</th><th>Blood Sugar</th><th>Heart Rate</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["temperature"] . "</td>";
            echo "<td>" . $row["bloodpressure"] . "</td>";
            echo "<td>" . $row["weight"] . "</td>";
            echo "<td>" . $row["height"] . "</td>";
            echo "<td>" . $row["bloodpressure"] . "</td>";
            echo "<td>" . $row["heartrate"] . "</td>";
            echo "<td class='action-buttons'>
                    <a href='editVit.php?id=" . $row["id"] . "'>Edit</a>
                    <a href='deleteVit.php?id=" . $row["id"] . "'>Delete</a>
                  </td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "No results found.";
    }

    $conn->close();
    ?>
</body>
</html>