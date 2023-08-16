<?php 
session_start();
include './header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucy Mememorial</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body id="admin--page">

    <div class="body-body">
    
    <h1 id="greeting"></h1>
    <p class="text-welcome">Welcome to the admin dashboard</p>

    <div class="first-container">
        <div class="reports--container">
            <div class="reports" >
                <p class="first--p">Total Patients</p>
                <div class="icon-con">
                    <span id="icon-pa" class="material-symbols-outlined">
                        person
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            <div class="reports">
                <p class="first--p">Inpatients</p>
                <div class="icon-con">
                    <span id="icon-pa1" class="material-symbols-outlined">
                        inpatient
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            <div class="reports">
                <p class="first--p">Outpatients</p>
                <div class="icon-con">
                    <span id="icon-pa2" class="material-symbols-outlined">
                        outpatient
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            <div class="reports">
                <p class="first--p">Doctors Available</p>
                <div class="icon-con">
                    <span id="icon-doc" class="material-symbols-outlined">
                        stethoscope
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            <div class="reports">
                <p class="first--p">Beds Available</p>
                <div class="icon-con">
                    <span id="icon-pa1" class="material-symbols-outlined">
                        hotel
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            <div class="reports">
                <p class="first--p">Wards Available</p>
                <div class="icon-con">
                    <span id="icon-pa1" class="material-symbols-outlined">
                        ward
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            <div class="reports">
                <p class="first--p">Nurses Available</p>
                <div class="icon-con">
                    <span id="icon-pa2" class="material-symbols-outlined">
                        home_health
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            <!--<div class="reports">
                <p class="first--p">Nurses Available</p>
                <div class="icon-con">
                    <span id="icon-2" class="material-symbols-outlined">
                        home_health
                    </span>
                    <h2>10</h2>
                </div>
            </div>-->
            <div class="reports">
                <p class="first--p">Lab Techs Available</p>
                <div class="icon-con">
                    <span id="icon-doc" class="material-symbols-outlined">
                        biotech
                    </span>
                    <h2>10</h2>
                </div>
            </div>
            
        </div>

        
    </div>

    <hr>


    <h1>Reports</h1>

    <div class="repdiv">
        <div class="repdiv1">
            <div class="appt-head">
                <div class="appt">
                    <span class="material-symbols-outlined">
                        arrow_circle_right
                    </span>
                    <h3>Manage Medicine</h3>
                </div>
                <div>
                    <button class="appt-bttn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+ Add Medicine</button>
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
                            <form class="forms1" name="signup" action="./manage1+.php" method="post">
                                <input type="text" name="name" id="name" placeholder="Medicine">
                                <input type="text" name="category" id="category" placeholder="Category">
                                <input type="text" name="price" id="price" placeholder="Price">
                                <input type="text" name="quantity" id="quantity" placeholder="Quantity">
                                <input type="text" name="sold" id="sold" placeholder="Sold Quantity">
                                <input type="text" name="manufacturer" id="manufacturer" placeholder="Manufacturer">
                                <label for="mandate">Manufacture Date</label>
                                <input type="date" name="mandate" id="mandate" placeholder="Manufactured Date">
                                <label for="expiry">Expiry Date</label>
                                <input type="date" name="expiry" id="expiry" placeholder="Expiry Date">
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

            $sql = "SELECT * FROM manage";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Medicne</th><th>Category</th><th>Price</th><th>Total Quantity</th><th>Sold Quantity</th><th>Manufacturer</th><th>Manufactured Date</th><th>Expiry Date</th></tr>";
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["category"] . "</td>";
                    echo "<td>" . $row["price"] . "</td>";
                    echo "<td>" . $row["quantity"] . "</td>";
                    echo "<td>" . $row["sold"] . "</td>";
                    echo "<td>" . $row["manufacturer"] . "</td>";
                    echo "<td>" . $row["mandate"] . "</td>";
                    echo "<td>" . $row["expiry"] . "</td>";
                    echo "<td class='action-buttons'>
                            <a href='editMan1.php?id=" . $row["id"] . "'>Edit</a>
                            <a href='deleteMan1.php?id=" . $row["id"] . "'>Delete</a>
                        </td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            } else {
                echo "No results found.";
            }

            $conn->close();
            ?>
        </div>
        <div class="repdiv1">
            <div class="appt-head">
                <div class="appt">
                    <span class="material-symbols-outlined">
                        arrow_circle_right
                    </span>
                    <h3>Prescriptions</h3>
                </div>
                <div>
                    <button class="appt-bttn" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">+ Prescriptions</button>
                </div>
            </div>

            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ayao Medical Center</h1>
                            <span class="material-symbols-outlined" data-bs-dismiss="modal">
                            close
                            </span>
                            
                        </div>
                        <div class="modal-body">
                            <form class="forms1" name="signup" action="./prescription1+.php" method="post">
                                <input type="date" name="date" id="date" placeholder>
                                <input type="text" name="name" id="name" placeholder="Patient's Name">
                                <input type="text" name="age" id="age" placeholder="Patient's Age">
                                <input type="text" name="gender" id="gender" placeholder="Pateint's gender">
                                <input type="doctor" name="doctor" id="doctor" placeholder="Doctor">
                                <textarea name="prescription" id="prescription" cols="30" rows="10" placeholder="Enter patient prescibtion"></textarea>
                                <button type="submit" value="submit" onclick="validateForm()">Add Prescriptions</button>
                            
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

            $sql = "SELECT * FROM prescriptions";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Serial Number</th><th>Date</th><th>Name</th><th>age</th><th>Gender</th><th>Doctor</th><th>Prescription</th></tr>";
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["age"] . "</td>";
                    echo "<td>" . $row["gender"] . "</td>";
                    echo "<td>" . $row["doctor"] . "</td>";
                    echo "<td>" . $row["prescription"] . "</td>";
                    echo "<td class='action-buttons'>
                            <a href='editPres1.php?id=" . $row["id"] . "'>Edit</a>
                            <a href='deletePres1.php?id=" . $row["id"] . "'>Delete</a>
                        </td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            } else {
                echo "No results found.";
            }

            $conn->close();
            ?>
        </div>
        <div class="repdiv1">
            <div class="appt-head">
                <div class="appt">
                    <span class="material-symbols-outlined">
                        arrow_circle_right
                    </span>
                    <h3>Appointments</h3>
                </div>
                <div>
                    <button class="appt-bttn" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">+ Appointment</button>
                </div>
            </div>

            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ayao Medical Center</h1>
                            <span class="material-symbols-outlined" data-bs-dismiss="modal">
                            close
                            </span>
                            
                        </div>
                        <div class="modal-body">
                            <form class="forms1" name="signup" action="./appointment1+.php" method="post">
                                <label for="date">Date</label>
                                <input type="date" name="date" id="date">
                                <label for="time">Time</label>
                                <input type="time" name="time" id="time">
                                <input type="text" name="name" id="name" placeholder="Full name">
                                <input type="doctor" name="doctor" id="doctor" placeholder="Doctor">
                                <button type="submit" value="submit" onclick="validateForm()">Add Appointment</button>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $host = "localhost: 3306";
            $user = "root";
            $password = "";
            $dbname = "hospitalmanagement";

            $conn = new mysqli($host, $user, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM appointments";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Date</th><th>Time</th><th>Name</th><th>Doctor</th></tr>";
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td>" . $row["time"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["doctor"] . "</td>";
                    echo "<td class='action-buttons'>
                            <a href='editAppt1.php?id=" . $row["id"] . "'>Edit</a>
                            <a href='deleteAppt1.php?id=" . $row["id"] . "'>Delete</a>
                        </td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            } else {
                echo "No results found.";
            }

            $conn->close();
            ?>
        </div>
        <div class="repdiv1">
            <div class="appt-head">
                <div class="appt">
                    <span class="material-symbols-outlined">
                        arrow_circle_right
                    </span>
                    <h3>Payment</h3>
                </div>
                <div>
                    <button class="appt-bttn" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">+ Add payment</button>
                </div>
            </div>

            <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ayao Medical Center</h1>
                            <span class="material-symbols-outlined" data-bs-dismiss="modal">
                            close
                            </span>
                            
                        </div>
                        <div class="modal-body">
                            <form class="forms1" name="signup" action="./payment1+.php" method="post">
                                <input type="text" name="name" id="name" placeholder="Patient's Name">
                                <input type="date" name="date" id="date" placeholder="Date">
                                <input type="text" name="paymedium" id="paymedium" placeholder="Payment Medium">
                                <input type="text" name="totalbill" id="totalbill" placeholder="Total Bill">
                                <input type="text" name="paybill" id="paybill" placeholder="Amount Paid">
                                <input type="text" name="balance" id="balance" placeholder="Balance">
                                <input type="text" name="status" id="status" placeholder="Status">
                                <button type="submit" value="submit" onclick="validateForm()">Add Payment</button>
                            
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
                            <a href='editPay1.php?id=" . $row["id"] . "'>Edit</a>
                            <a href='deletePay1.php?id=" . $row["id"] . "'>Delete</a>
                        </td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            } else {
                echo "No results found.";
            }

            $conn->close();
            ?>
        </div>
        <div class="repdiv1">
            <div class="appt-head">
                <div class="appt">
                    <span class="material-symbols-outlined">
                        arrow_circle_right
                    </span>
                    <h3>Bed & Ward</h3>
                </div>
                <div>
                    <button class="appt-bttn" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">+ Allocate Bed</button>
                </div>
            </div>

            <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ayao Medical Center</h1>
                            <span class="material-symbols-outlined" data-bs-dismiss="modal">
                            close
                            </span>
                            
                        </div>
                        <div class="modal-body">
                            <form class="forms1" name="signup" action="./bed1+.php" method="post">
                                <input type="text" name="name" id="name" placeholder="Patient Name">
                                <input type="text" name="ward" id="ward" placeholder="Ward">
                                <input type="text" name="bedno" id="bedno" placeholder="Bed Number">
                                <input type="date" name="allocate" id="allocate" placeholder="Allocation Date">
                                <input type="date" name="discharge" id="discharge" placeholder="Discharge">
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

            $sql = "SELECT * FROM bed";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Patient Name</th><th>Ward</th><th>Bed Number</th><th>Allocation date</th> <th>Discharge Date</th></tr>";
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["ward"] . "</td>";
                    echo "<td>" . $row["bedno"] . "</td>";
                    echo "<td>" . $row["allocate"] . "</td>";
                    echo "<td>" . $row["dellocate"] . "</td>";
                    echo "<td class='action-buttons'>
                            <a href='editBed1.php?id=" . $row["id"] . "'>Edit</a>
                            <a href='deleteBed1.php?id=" . $row["id"] . "'>Delete</a>
                        </td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            } else {
                echo "No results found.";
            }

            $conn->close();
            ?>
        </div>
        <div class="repdiv1">
            <div class="appt-head">
                <div class="appt">
                    <span class="material-symbols-outlined">
                        arrow_circle_right
                    </span>
                    <h3>Operation Report</h3>
                </div>
                <div>
                    <button class="appt-bttn" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">+ Report</button>
                </div>
            </div>

            <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ayao Medical Center</h1>
                            <span class="material-symbols-outlined" data-bs-dismiss="modal">
                            close
                            </span>
                            
                        </div>
                        <div class="modal-body">
                            <form class="forms1" name="signup" action="./reports1+.php" method="post">
                                <input type="date" name="date" id="date">
                                <input type="text" name="name" id="name" placeholder="Patient Name">
                                <input type="text" name="doctor" id="doctor" placeholder="Doctor">
                                <textarea type="text" name="description" id="description" placeholder="Description"></textarea>
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

            $sql = "SELECT * FROM reports";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Date</th><th>Patient Name</th><th>Doctor</th><th>Description</th></tr>";
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["doctor"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";
                    echo "<td class='action-buttons'>
                            <a href='editRep1.php?id=" . $row["id"] . "'>Edit</a>
                            <a href='deleteRep1.php?id=" . $row["id"] . "'>Delete</a>
                        </td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            } else {
                echo "No results found.";
            }

            $conn->close();
            ?>
        </div>
        <div class="repdiv1">
            <div class="appt-head">
                <div class="appt">
                    <span class="material-symbols-outlined">
                        arrow_circle_right
                    </span>
                    <h3>Blood Bank</h3>
                </div>
                <div>
                    <button class="appt-bttn" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">+ Add Blood</button>
                </div>
            </div>

            <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ayao Medical Center</h1>
                            <span class="material-symbols-outlined" data-bs-dismiss="modal">
                            close
                            </span>
                            
                        </div>
                        <div class="modal-body">
                            <form class="forms1" name="signup" action="./bank+.php" method="post">
                                <input type="text" name="type" id="type" placeholder="Blood Type">
                                <input type="text" name="quantity" id="quantity" placeholder="Quantity">
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

            $sql = "SELECT * FROM bank";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Type</th><th>Quantity</th></tr>";
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["type"] . "</td>";
                    echo "<td>" . $row["quantity"] . "</td>";
                    echo "<td class='action-buttons'>
                            <a href='editbank.php?id=" . $row["id"] . "'>Edit</a>
                            <a href='deleteBank.php?id=" . $row["id"] . "'>Delete</a>
                        </td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            } else {
                echo "No results found.";
            }

            $conn->close();
            ?>
        </div>
        <div class="repdiv1">
            <div class="appt-head">
                <div class="appt">
                    <span class="material-symbols-outlined">
                        arrow_circle_right
                    </span>
                    <h3>Birth Report</h3>
                </div>
                <div>
                    <button class="appt-bttn" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">+ Add Birth Report</button>
                </div>
            </div>

            <div class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ayao Medical Center</h1>
                            <span class="material-symbols-outlined" data-bs-dismiss="modal">
                            close
                            </span>
                            
                        </div>
                        <div class="modal-body">
                            <form class="forms1" name="signup" action="./birth+.php" method="post">
                                <input type="text" name="name" id="name" placeholder="Mother's Name">
                                <label for="date">Date of Birth</label>
                                <input type="date" name="date" id="date">
                                <label for="time">Time of Birth</label>
                                <input type="time" name="time" id="time">
                                <input type="text" name="number" id="number" placeholder="Number of Children">
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

            $sql = "SELECT * FROM birth";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Patient Name</th><th>Date</th><th>Time</th><th>Number of Children</th></tr>";
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td>" . $row["time"] . "</td>";
                    echo "<td>" . $row["number"] . "</td>";
                    echo "<td class='action-buttons'>
                            <a href='editBirth.php?id=" . $row["id"] . "'>Edit</a>
                            <a href='deleteBirth.php?id=" . $row["id"] . "'>Delete</a>
                        </td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            } else {
                echo "No results found.";
            }

            $conn->close();
            ?>
        </div>
    </div>

    








    










    </div>
    <script src="./admin.js"></script>
</body>
</html>