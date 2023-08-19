<?php include 'headers/header2.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucy Mememorial</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <div class="greet">
        <h1>
            Welcome to Lucy Mememorial!
        </h1>
        <p>Kindly log into the respective module to access information.</p>
    </div>
    
    <div class="Centered-container">
        <div class="logs-container">
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        person
                    </span>
                    <h3>Patients</h3>
                </div>
                <div class="button-container">
                    <a href="./Patient/patientSignin.php">Log in</a>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        stethoscope
                    </span>
                    <h3>Doctor</h3>
                </div>
                <div class="button-container">
                    <a href="./Doctors/doctorSignin.php">Log in</a>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        clinical_notes
                    </span>
                    <h3>Nurse</h3>
                </div>
                <div class="button-container">
                    <a href="./Nurses/nurseSignin.php">Log in</a>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        medication
                    </span>
                    <h3>Pharmacist</h3>
                </div>
                <div class="button-container">
                    <a href="./Pharmacist/pharmaSignin.php">Log in</a>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        biotech
                    </span>
                    <h3>Laboratorist</h3>
                </div>
                <div class="button-container">
                    <a href="./Lab/labSignin.php">Log in</a>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        account_balance
                    </span>
                    <h3>Accountant</h3>
                </div>
                <div class="button-container">
                    <a href="./Accountant/accSignin.php">Log in</a>
                </div>
            </div>
            <div class="log-items">
                <div>
                    <span  class="material-symbols-outlined">
                        shield_person
                    </span>
                    <h3>Admin</h3>
                </div>
                <div id="loginAdmin" class="button-container">
                    <a href="./Admin/adminSignIn.php">Log in</a>
                </div>
            </div>
            

        </div>
    </div>

</body>
    
    
</html>