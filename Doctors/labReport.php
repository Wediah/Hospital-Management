<?php include './doctorNav.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="doctorNav.css">
    <script src="./doctor.js"></script>
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
            <h3>Lab Request</h3>
        </div>
        <div>
            <button class="appt-bttn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+ Add Lab Request</button>
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
                    <form class="forms1" name="signup" action="./lab+.php" method="post">
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date">
                        <input type="text" name="name" id="name" placeholder="Patient Name">
                        <input type="text" name="doctor" id="doctor" placeholder="Doctor">
                        <input type="text" name="test" id="test" placeholder="Test Type">
                        <label for="ddate">Due Date</label>
                        <input type="date" name="ddate" id="ddate">
                        <textarea name="report" id="report" placeholder="Lap Report"></textarea>
                        <button type="submit" value="submit" onclick="validateForm()">Request</button>
                    
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

    $sql = "SELECT * FROM labreq";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Patient ID</th><th>Date</th><th>Patient Name</th><th>Doctor</th><th>Test Type</th><th>Due Date</th><th>Report</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["doctor"] . "</td>";
            echo "<td>" . $row["test"] . "</td>";
            echo "<td>" . $row["ddate"] . "</td>";
            echo "<td>" . $row["report"] . "</td>";
            echo "<td class='action-buttons'>
                    <a href='editLab1.php?id=" . $row["id"] . "'>Edit</a>
                    <a href='deleteLab1.php?id=" . $row["id"] . "'>Delete</a>
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