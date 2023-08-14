<?php include './accNav.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="accNav.css">
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
            <h3>Payment</h3>
        </div>
        <div>
            <button class="appt-bttn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+ Add pyment</button>
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
                    <form class="forms1" name="signup" action="./payment+.php" method="post">
                        <input type="text" name="name" id="name" placeholder="Patient's Name">
                        <input type="date" name="date" id="date" placeholder="Date">
                        <input type="text" name="paymedium" id="paymedium" placeholder="Payment Medium">
                        <input type="text" name="totalbill" id="totalbill" placeholder="Total Bill">
                        <input type="text" name="paybill" id="paybill" placeholder="Amount Paid">
                        <input type="text" name="balance" id="balance" placeholder="Balance">
                        <input type="text" name="status" id="status" placeholder="Status">
                        <button type="submit" value="submit" onclick="validateForm()">Add Medicine</button>
                    
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

    $sql = "SELECT * FROM payment";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Payment Number</th><th>Patient Name</th><th>Date</th><th>Payment Medium</th><th>Total Bill</th><th>Amount Paid</th><th>Balance</th><th>Status</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "<td>" . $row["paymedium"] . "</td>";
            echo "<td>" . $row["totalbill"] . "</td>";
            echo "<td>" . $row["paybill"] . "</td>";
            echo "<td>" . $row["balance"] . "</td>";
            echo "<td>" . $row["status"] . "</td>";
            echo "<td class='action-buttons'>
                    <a href='editPay.php?id=" . $row["id"] . "'>Edit</a>
                    <a href='deletePay.php?id=" . $row["id"] . "'>Delete</a>
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