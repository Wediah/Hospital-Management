<?php include './accNav.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMC</title>
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
            <h3>Payment history</h3>
        </div>
        <div>
            <form class="form2" method="get" action="">
                <label for="search_name">Search by Name:</label>
                <input type="text" name="name" id="name">
                <input class="bttn4" type="submit" value="Search">
            </form>
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

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"])) {
            $name = $_GET["name"];

            $sql = "SELECT * FROM payment WHERE name LIKE '%$name%'";
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
        }

        $conn->close();
    ?>


</body>
</html>